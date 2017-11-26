<?php

namespace lastejas\Http\Controllers\Dishes;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use lastejas\Http\Controllers\Controller;
use lastejas\Dishes as dishesModel;
use lastejas\SubCategory as subCategory;
use lastejas\SubType as subType;

use DB;

class Dishes extends Controller
{
    public function __construct(){
        $this->middleware(['auth','role:Administrador,Mozo']);
    }

    public function index(Request $request) {
        $filter = $request->filterCombo != 0? $request->filterCombo : null;
        $data['dataView'] = dishesModel::GetDataDish($filter);
        $data['dataCombo'] = subCategory::where('statusSubCategory', 1)->orderBy('idSubCategory')->get();
        $data['dataComboDish'] = subType::where('statusSubType', 1)->orderBy('idSubType')->get();
        $data['category'] = $filter;
        return view('cocinero.platillos', $data);
    }

    public function store(Request $request) {
        $resultImgName = "default.png";
        $obj = new dishesModel();
        $obj->nameDish = $request->dishName;
        $obj->priceDish = $request->dishPrice;
        $obj->idSubCategory = $request->categoryId;
        $obj->idSubType = $request->dishType;
        $obj->statusDish = 1;
        if(!empty($request->file('imagen'))){
            $resultImgName = $request->file('imagen')->store('productos');
            $resultImgName = str_replace('productos/', '',$resultImgName);
        }
        $obj->imageDish = $resultImgName;
        $obj->save();

        return redirect('platillos');
    }

    public function edit($id) {
        $data = DB::table('Dishes')->where('idDish', $id)->get();
        return response()->json($data);
    }

    public function update(Request $request, $id) {
        $obj = dishesModel::find($id);
        $obj->nameDish = $request->dishName;
        $obj->priceDish = $request->dishPrice;
        $obj->idSubCategory = $request->categoryId;
        $obj->idSubType = $request->dishType;
        if(!empty($request->file('imagen'))){
            $resultImgName = $request->file('imagen')->store('productos');
            $resultImgName = str_replace('productos/', '',$resultImgName);
            $obj->imageDish = $resultImgName;
        }
        $obj->save();

        return redirect('platillos');
    }

    public function delete(Request $request, $id) {
        $obj = dishesModel::find($id);
        $obj->statusDish = 0;
        $obj->save();
        return redirect('platillos');
    }
}
