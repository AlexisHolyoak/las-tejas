<?php

namespace lastejas\Http\Controllers;

use Illuminate\Http\Request;
use lastejas\Table;
use DB;
use lastejas\Branch;
use lastejas\User;
/*
developed by: Alexis Peralta Holyoak
*/
class TableController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','role:Administrador']);
    }
    public function index(){
      $tables = DB::table('Tables as t')
      ->join('Branches as b','t.idBranch','=','b.idBranch')
      ->join('Users as u','t.idUser','=','u.idUser')
      ->select('t.idTable as CODIGO','t.numberTable as NUMBER','t.numberOfChairsTable as CHAIRS','t.statusOfAttentionTable as STATUS','b.nameBranch as SUCURSAL','u.nameUser as USER','u.firstSurNameUser as FIRST','u.secondSurNameUser as SECOND')
      ->orderBy('t.numberTable','ASC')->where('t.statusTable','=','1')->paginate();
      return view('table.index',compact('tables'));
    }
    public function show($idTable){
      $table=DB::table('Tables as t')
      ->join('Branches as b','t.idBranch','=','b.idBranch')
      ->join('Users as u','t.idUser','=','u.idUser')
      ->select('t.idTable as CODIGO','t.numberTable as NUMBER','t.numberOfChairsTable as CHAIRS','t.statusOfAttentionTable as STATUS','b.nameBranch as SUCURSAL','u.nameUser as USER','u.firstSurNameUser as FIRST','u.secondSurNameUser as SECOND')
      ->where('t.idTable','=',$idTable)
      ->first();
      return view('table.show',compact('table'));
    }
    public function create(){
      $branches=Branch::all();
      $users=User::all();
      return view('table.create',compact(['branches','users']));
    }
    public function store(Request $request){
      $this->validate($request,[
          'numberTable' => 'required|integer|min:0',
          'numberOfChairsTable' => 'required|integer|min:0',
          'statusOfAttentionTable'=>'required',
          'idBranch'=> 'required',
          'idUser'=> 'required'
      ]);
      $table = new Table;
      $table-> numberTable = $request->get('numberTable');
      $table-> numberOfChairsTable = $request ->get('numberOfChairsTable');
      $table-> statusOfAttentionTable = $request -> get('statusOfAttentionTable');
      $table-> idBranch =$request ->get('idBranch');
      $table-> statusTable = '1';
      $table-> idUser = $request -> get ('idUser');
      $table-> save();
      return redirect('/table');
    }
    public function edit($idTable){
      $table=DB::table('Tables as t')
      ->join('Branches as b','t.idBranch','=','b.idBranch')
      ->join('Users as u','t.idUser','=','u.idUser')
      ->select('t.idTable as CODIGO','t.numberTable as NUMBER','t.idBranch as IDSUCURSAL',
        't.numberOfChairsTable as CHAIRS','t.statusOfAttentionTable as STATUS',
        'b.nameBranch as SUCURSAL','u.idUser as USER','u.nameUser as NAME',
        'u.firstSurNameUser as FIRST','u.secondSurNameUser as SECOND')
      ->where('t.idTable','=',$idTable)
      ->first();
      $branches=Branch::all();
      $users=User::all();
      return view('table.edit',compact(['branches','users','table']));
    }
    public function destroy($idTable){
      $table = Table::find($idTable);
      $table-> statusTable =  '0';
      $table-> save();
      return redirect('/table');
    }
    public function update(Request $request, $idTable){
      $this->validate($request,[
          'numberTable' => 'required',
          'numberOfChairsTable' => 'required',
          'statusOfAttentionTable'=>'required',
          'idBranch'=> 'required',
          'idUser'=> 'required'
      ]);
      $table = Table::find($idTable);
      $table-> numberTable = $request -> numberTable;
      $table-> numberOfChairsTable = $request -> numberOfChairsTable;
      $table-> statusOfAttentionTable = $request -> statusOfAttentionTable;
      $table-> idBranch = $request -> idBranch;
      $table-> idUser = $request -> idUser;
      $table-> save();
      return redirect('/table');
    }
}
