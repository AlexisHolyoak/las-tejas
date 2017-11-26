<?php

namespace lastejas\Http\Controllers;

use Illuminate\Http\Request;
//Models
use lastejas\{User,Branch,Role,Table,Dishes,Supplies,OrderDishes};
use Illuminate\Support\Facades\DB;
use PDF;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
	public function __construct(){
        $this->middleware('auth');
    }
	public function index(){
		return view('reports.index');
	}
    public function reportUsersPdf($op){
      $users=User::all();
      $pdf=PDF::loadView('reports.reportuserspdf',['users'=>$users]);
      return $op==1?$pdf->stream('users.pdf'):$pdf->download('users.pdf');
    }
		public function reportDishesPdf($op){
      $dishes=DB::table('Dishes as di')
			->join('SubCategories as su','di.idSubCategory','su.idSubCategory')
			->select('di.idDish','di.nameDish','di.priceDish','su.nameSubCategory')
			->where('di.statusDish',1)
			->where('su.statusSubCategory',1)
			->orderBy('su.nameSubCategory')->get();
      $pdf=PDF::loadView('reports.reportdishespdf',['dishes'=>$dishes]);
      return $op==1?$pdf->stream('dishes.pdf'):$pdf->download('dishes.pdf');
    }
		public function reportSuppliesPdf($op){
      $supplies=Supplies::all();
      $pdf=PDF::loadView('reports.reportsuppliespdf',['supplies'=>$supplies]);
      return $op==1?$pdf->stream('supplies.pdf'):$pdf->download('supplies.pdf');
    }
		public function reportOrderDishesPdf($op){
      $orderdishes=DB::table('OrderDishes as od')
			->join('Orders as or','or.idOrder','od.idOrder')
			->join('Dishes as di','di.idDish','od.idDish')
			->select('od.idOrderDish','di.nameDish','or.idOrder','od.quantity')
			->get();
      $pdf=PDF::loadView('reports.reportorderdishespdf',['orderdishes'=>$orderdishes]);
      return $op==1?$pdf->stream('orderdishes.pdf'):$pdf->download('orderdishes.pdf');
    }
    public function reportUsersXls(){
       	Excel::create('Users of Las Tejas', function($excel) {
            $excel->sheet('Users', function($sheet) {
		        $users=DB::table('Users as us')
		    	->join('Districts as di','us.idDistrict','di.idDistrict')
		    	->join('Provinces as pr','di.idProvince','pr.idProvince')
		    	->join('Departments as de','pr.idDepartment','de.idDepartment')
		    	->select('us.*','di.nameDistrict as district','pr.nameProvince as province','de.nameDepartment as department')->orderBy('us.idUser', 'asc')->get();
		    	$arrayUser=[];
		    	foreach ($users as $i) {
			    	$arrayUser[] = array(
			    		'ID' => $i->idUser,
			    		'Nombre de Usuario' => $i->nickNameUser,
			    		'Nombres' => $i->firstSurNameUser,
			    		'Apellidos' => $i->secondSurNameUser,
			    		'Género' => $i->genderUser,
			    		'DNI' => $i->dniUser,
			    		'RUC' => $i->rucUser,
			    		'Dirección' => $i->addressUser,
			    		'Teléfono' => $i->phoneUser,
			    		'Celular' => $i->cellPhoneUser,
			    		'Correo' => $i->email,
			    		'Fecha de Nacimiento' => $i->birthdayUser,
			    		'Ubicacion' => $i->district.', '.$i->province.', '.$i->department,
			    		'Estado' => $i->statusUser

			    	);
			    }
			    for ($i=1; $i < sizeof($arrayUser)+2; $i++) {
			    	$sheet->row($i, function($row) {
					    $row->setBackground('#FFF5E0');
					    $row->setFont(array(
						    'family'     => 'Calibri',
						    'size'       => '12'
						));
						$row->setAlignment('center');
						$row->setValignment('center');
					});
					$sheet->setBorder('A'.$i.':N'.$i, 'thin');
			    }

				$sheet->cells('A1:N1', function($cells) {
				    $cells->setBackground('#B1DFE3');
				    $cells->setFont(array(
					    'family'     => 'Calibri',
					    'size'       => '14',
					    'bold'       =>  true
					));
					$cells->setAlignment('center');
					$cells->setValignment('center');
				});
				$sheet->setBorder('A1:N1', 'thick');
				$sheet->setAutoSize(true);
                $sheet->fromArray($arrayUser);
            });
        })->export('xls');
    }
		public function reportDishesXls(){
       	Excel::create('Dishes of Las Tejas', function($excel) {
            $excel->sheet('Dishes', function($sheet) {
		        $Dishes=DB::table('Dishes as di')
		    	->join('SubCategories as su','di.idSubCategory','su.idSubCategory')
		    	->select('di.idDish','di.nameDish','di.priceDish','su.nameSubCategory')
					->where('di.statusDish',1)
					->where('su.statusSubCategory',1)
					->orderBy('su.nameSubCategory')->get();
		    	$arrayDishes=[];
		    	foreach ($Dishes as $i) {
			    	$arrayDishes[] = array(
			    		'ID' => $i->idDish,
			    		'Nombre de Platillo' => $i->nameDish,
			    		'Precio de Platillo' => $i->priceDish,
			    		'Categoria' => $i->nameSubCategory,
			    	);
			    }
			    for ($i=1; $i < sizeof($arrayDishes)+2; $i++) {
			    	$sheet->row($i, function($row) {
					    $row->setBackground('#FFF5E0');
					    $row->setFont(array(
						    'family'     => 'Calibri',
						    'size'       => '12'
						));
						$row->setAlignment('center');
						$row->setValignment('center');
					});
					$sheet->setBorder('A'.$i.':N'.$i, 'thin');
			    }

				$sheet->cells('A1:N1', function($cells) {
				    $cells->setBackground('#B1DFE3');
				    $cells->setFont(array(
					    'family'     => 'Calibri',
					    'size'       => '14',
					    'bold'       =>  true
					));
					$cells->setAlignment('center');
					$cells->setValignment('center');
				});
				$sheet->setBorder('A1:N1', 'thick');
				$sheet->setAutoSize(true);
                $sheet->fromArray($arrayDishes);
            });
        })->export('xls');
    }
		public function reportSuppliesXls(){
       	Excel::create('Supplies of Las Tejas', function($excel) {
            $excel->sheet('Supplies', function($sheet) {
		        $Supplies=DB::table('Supplies as su')
		    	->select('su.idSupply','su.nameSupply','su.acquisitionDateSupply')
					->get();
		    	$arraySupplies=[];
		    	foreach ($Supplies as $i) {
			    	$arraySupplies[] = array(
			    		'ID' => $i->idSupply,
			    		'Suministros' => $i->nameSupply,
			    		'Fecha de Registro' => $i->acquisitionDateSupply,
			    	);
			    }
			    for ($i=1; $i < sizeof($arraySupplies)+2; $i++) {
			    	$sheet->row($i, function($row) {
					    $row->setBackground('#FFF5E0');
					    $row->setFont(array(
						    'family'     => 'Calibri',
						    'size'       => '12'
						));
						$row->setAlignment('center');
						$row->setValignment('center');
					});
					$sheet->setBorder('A'.$i.':N'.$i, 'thin');
			    }

				$sheet->cells('A1:N1', function($cells) {
				    $cells->setBackground('#B1DFE3');
				    $cells->setFont(array(
					    'family'     => 'Calibri',
					    'size'       => '14',
					    'bold'       =>  true
					));
					$cells->setAlignment('center');
					$cells->setValignment('center');
				});
				$sheet->setBorder('A1:N1', 'thick');
				$sheet->setAutoSize(true);
                $sheet->fromArray($arraySupplies);
            });
        })->export('xls');
    }
		public function reportOrderDishesXls(){
       	Excel::create('OrderDishes of Las Tejas', function($excel) {
            $excel->sheet('OrderDishes', function($sheet) {
		        $OrderDishes=DB::table('OrderDishes as od')
						->join('Orders as or','or.idOrder','od.idOrder')
						->join('Dishes as di','di.idDish','od.idDish')
						->select('od.idOrderDish','di.nameDish','or.idOrder','od.quantity')
						->get();
		    	$arrayOrderDishes=[];
		    	foreach ($OrderDishes as $i) {
			    	$arrayOrderDishes[] = array(
			    		'ID' => $i->idOrderDish,
			    		'Nombre de Platillo' => $i->nameDish,
			    		'N° de Orden' => $i->idOrder,
			    		'Cantidad' => $i->quantity,
			    	);
			    }
			    for ($i=1; $i < sizeof($arrayOrderDishes)+2; $i++) {
			    	$sheet->row($i, function($row) {
					    $row->setBackground('#FFF5E0');
					    $row->setFont(array(
						    'family'     => 'Calibri',
						    'size'       => '12'
						));
						$row->setAlignment('center');
						$row->setValignment('center');
					});
					$sheet->setBorder('A'.$i.':N'.$i, 'thin');
			    }

				$sheet->cells('A1:N1', function($cells) {
				    $cells->setBackground('#B1DFE3');
				    $cells->setFont(array(
					    'family'     => 'Calibri',
					    'size'       => '14',
					    'bold'       =>  true
					));
					$cells->setAlignment('center');
					$cells->setValignment('center');
				});
				$sheet->setBorder('A1:N1', 'thick');
				$sheet->setAutoSize(true);
                $sheet->fromArray($arrayOrderDishes);
            });
        })->export('xls');
    }
}
