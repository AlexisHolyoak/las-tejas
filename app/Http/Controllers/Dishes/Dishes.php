<?php

namespace lastejas\Http\Controllers\Dishes;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use lastejas\Http\Controllers\Controller;

use DB;

class Dishes extends Controller
{
    public function index() {
        $data['dataView'] = $this->getDataDish();
        $data['dataCombo'] = DB::table('SubCategories')->where('statusSubCategory', 1)->get();
        return view('cocinero.platillos', $data);
    }

    public function store(Request $request) {
        $result = DB::table('Dishes')->insert(['nameDish' => $request->dishName, 'statusDish' => 1, 'idSubCategory' => $request->categoryId, 'idSubType' => 1, 'priceDish' => $request->dishPrice]);
        $filter = $request->filterCombo != 0 ? $request->filterCombo : null;
        $data = $this->getDataDish($filter);
        return response()->json($data);
    }

    public function edit($id) {
        $data = DB::table('Dishes')->where('idDish', $id)->get();
        return response()->json($data);
    }

    public function update(Request $request, $id) {
        DB::table('Dishes')->where('idDish', $id)->update(['nameDish' => $request->dishName, 'priceDish' => $request->dishPrice]);
        $filter = $request->filterCombo != 0 ? $request->filterCombo : null;
        $data = $this->getDataDish($filter);
        return response()->json($data);
    }

    public function delete(Request $request, $id) {
        DB::table('Dishes')->where('idDish', $id)->update(['statusDish' => 0]);
        $filter = $request->filterCombo != 0 ? $request->filterCombo : null;
        $data = $this->getDataDish($filter);
        return response()->json($data);
    }

    public function getDataDish($filterCategory=null){
        if(is_null($filterCategory)){
            $filterCategory = [1,2];
        }else{
            $filterCategory = [0, $filterCategory];
        }
        return DB::table('Dishes as d')->select('idDish', 'nameDish', 'priceDish', 'nameSubCategory', 'd.idSubCategory')
                                                    ->join('SubCategories as sc', 'd.idSubCategory', 'sc.idSubCategory')
                                                    ->where('statusDish', 1)
                                                    ->where('statusSubCategory', 1)
                                                    ->whereIn('sc.idSubCategory', $filterCategory)
                                                    ->orderby('idDish')
                                                    ->get();
    }
    public function refreshProducts(Request $request) {
        $filter = $request->filterCombo != 0 ? $request->filterCombo : null;
        $data = $this->getDataDish($filter);

        return response()->json($data);
    }
}
