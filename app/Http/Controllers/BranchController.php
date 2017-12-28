<?php

namespace App\Http\Controllers;
use App\Branch;
use App\Style;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests\CreateBranchRequest;

class BranchController extends Controller
{
    public function indexBranch(){
      $branchs = Branch::all();
      return view('admin.branchs.index', compact('branchs'));
    }
    public function postBranch(CreateBranchRequest $request ){
      $inputs= Input::all();
      $branch = Branch::create($inputs);
      return redirect('/admin/branchs');
    }
    public function createBranch(){
      $styles= Style::all()->pluck('name','id');
      return view('admin.branchs.create',compact('styles'));
    }
    public function editBranch(Branch $branch){
      $styles= Style::all()->pluck('name','id');//compact (biếnx)
      return view('admin.branchs.edit', compact('branch', 'styles'));
    }
    public function putBranch(Branch $branch){
      $inputs = Input::all();
      $branch->update($inputs);
      return redirect('/admin/branchs');
    }
    public function deleteBranch(Branch $branch){
      $branch->delete();
      return redirect('admin/branchs')->withSuccess('Branchs has delete');
    }
    //Search branch From Database - Start
}
