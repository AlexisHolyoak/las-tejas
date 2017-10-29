<?php

namespace lastejas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use lastejas\Branch;
use lastejas\Http\Requests\BranchRequest;
use Illuminate\Support\Facades\Input;

class BranchController extends Controller
{
    public function index()
    {
    	$branches = DB::table('Branches')->paginate(3);
    	return view('branch.index', compact('branches'));
    }
    public function store(Request $request)
    {
    	$branch = new Branch;
		$branch->nameBranch = $request->get('nameBranch');
		$branch->kindOfBussinessBranch = $request->get('kindOfBussinessBranch');
		$branch->rucBranch = $request->get('rucBranch');
		$branch->addressBranch = $request->get('addressBranch');
		$branch->kindOfExchangeBranch = $request->get('kindOfExchangeBranch');
		$branch->save();
        return redirect()->route('branch.index');
    }
    public function update(Request $request,$id){
        $branch = Branch::find($id);
        $branch->nameBranch = $request->get('nameBranch');
        $branch->kindOfBussinessBranch = $request->get('kindOfBussinessBranch');
        $branch->rucBranch = $request->get('rucBranch');
        $branch->addressBranch = $request->get('addressBranch');
        $branch->kindOfExchangeBranch = $request->get('kindOfExchangeBranch');
        $branch->save();
        return redirect()->route('branch.index');
    }
    public function destroy($id){
        $branch = Branch::find($id);
        $branch->delete();
        return redirect()->route('branch.index');
    }
}
