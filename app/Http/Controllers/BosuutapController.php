<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Alert;
use RealRashid\SweetAlert\Facades\Aler;
use App\User;
use Illuminate\Support\Str;
use App\Http\Requests\BosuutapAddRequest;
use App\Http\Requests\BosuutapEditRequest;
use App\loaibosuutaps;
use App\bosuutaps;
use DB;
use Request;
use Input,File;

class BosuutapController extends Controller
{
    //
    public function getList()
    {
        $bosuutap = DB::table('bosuutaps')->get();
        $loai = DB::table('loaibosuutaps')->get();
    	return view('backend.bosuutap.danhsach',compact('bosuutap','loai'));
    }

    public function getAdd()
    {
        $loai = DB::table('loaibosuutaps')->get();
    	return view('backend.bosuutap.them',compact('loai'));
    }

    public function postAdd(BosuutapAddRequest $request)
    {
        $files =[];
        if ($request->file('txtBSTImage1')) {
            $files[] = $request->file('txtBSTImage1');
        }
        if ($request->file('txtBSTImage2')) {
            $files[] = $request->file('txtBSTImage2');
        } 
        if ($request->file('txtBSTImage3')) {
            $files[] = $request->file('txtBSTImage3');
        }
        if ($request->file('txtBSTImage4')) {
            $files[] = $request->file('txtBSTImage4');
        } 
        if ($request->file('txtBSTImage5')) {
            $files[] = $request->file('txtBSTImage5');
        }

        $names =[];   

        foreach ($files as $file) {
            if(!empty($file)){
                $filename=$file->getClientOriginalName();
                $file->move(
                    base_path().'/public/upload/bosuutap/', $filename
                );

                $hinh = new bosuutaps; 
                $hinh->hinhanh = $filename;
                $hinh->id_loaibosuutap = $request->txtBSTCate;
                $hinh->save();
            }
        }
        alert()->success('Thêm bộ sưu tập thành công.','Thông báo');
        return redirect()->route('admin.bosuutap.list');
    }

    public function getDelete($id)
    {   
    	$bosuutap = DB::table('bosuutaps')->where('id',$id)->first();
        foreach ($bosuutap as $val) {
            $image = 'public/upload/bosuutap/'.$val->hinhanh;
            File::delete($image);
            DB::table('bosuutaps')->where('id',$id)->delete();
        }
        alert()->success('Xóa bộ sưu tập thành công.','Thông báo');
        return redirect()->route('admin.bosuutap.list');
    }

    public function getEdit($id)
    {
        $loai = DB::table('bosuutaps')->where('id',$id)->first();
        return view('backend.bosuutap.sua',compact('loai'));
    }

    public function postEdit($id, BosuutapEditRequest $request)
    {
        if(!empty(Request::file('fEditImage'))) {
            foreach (Request::file('fEditImage') as $file) {
                $bst_img = new bosuutaps();
                if (isset($file)) {
                    $bst_img->hinhanh = $file->getClientOriginalName();
                    $bst_img->id_loaibosuutap = $id;
                    $file->move('public/upload/bosuutap/', $file->getClientOriginalName());
                    $bst_img->save();
                } 
          }
        }
        alert()->success('Sửa bộ sưu tập thành công.','Thông báo');
        return redirect()->route('admin.loaibosuutap.list');
    }
    public function loai($id){
        $loai = DB::table('loaibosuutaps')->get();
        $bosuutap = DB::table('bosuutaps')->where('id_loaibosuutap',$id)->get();
        $loaibst = DB::table('loaibosuutaps')->where('id',$id)->first();
        return view('backend.bosuutap.danhsach',compact('loaibst','bosuutap','loai'));
    }
}
