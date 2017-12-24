<?php
namespace App\Http\Controllers;
use App\Style;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\CreateStyleRequest;

class StyleController extends Controller
{
    public function index(){
      $styles = Style::all();
      return view('admin.styles.index', compact('styles'));
    }

    public function createStyle(){
      $styles= Style::all()->pluck('name','id');
      return view('admin.styles.create',compact('styles'));
    }

    public function postStyle(CreateStyleRequest $request){
      $inputs= Input::all();//lấy tất cả cả input từ form put lên
      $style = Style::create($inputs);//hàm tạo con mèo
      return redirect('/admin/styles');//$cat->id:câp nhập vs id con mèox
    }
    public function editStyle(Style $style){
      $styles= Style::all()->pluck('name','id');//compact (biếnx)
      return view('admin.styles.edit', compact('style', 'styles'));
    }
    public function putStyle(Style $style){
      $inputs = Input::all();
      $style->update($inputs);
      return redirect('/admin/styles');
    }
    public function deleteStyle(Style $style){
      $style->delete();
      return redirect('admin/styles')->withSuccess('Styles has delete');
    }
}
