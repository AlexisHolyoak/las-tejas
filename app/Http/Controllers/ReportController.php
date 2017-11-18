<?php

namespace lastejas\Http\Controllers;

use Illuminate\Http\Request;
//Models
use lastejas\{User,Branch,Role,Table};
use Illuminate\Support\Facades\DB;
use PDF;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
	public function index(){
		return view('reports.index');
	}
    public function reportUsersPdf($op){
      $users=User::all();
      $pdf=PDF::loadView('reports.reportuserspdf',['users'=>$users]);
      return $op==1?$pdf->stream('users.pdf'):$pdf->download('users.pdf');
    }
    public function arrayUser($users){
    	
	    return $arrayUser;
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
}
