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
use App\Http\Requests\TailieuRequest;
use App\loaitailieus;
use App\tailieus;
use DB;
use Request;
use Input,File;

class TailieuController extends Controller
{
    //
    public function getList()
    {

        $tailieu = DB::table('tailieus')->get();
        $loaitailieu = DB::table('loaitailieus')->get();
    	return view('backend.tailieu.danhsach',compact('tailieu','loaitailieu'));
    }

    public function getAdd()
    {
        $loaitailieu = DB::table('loaitailieus')->get();
    	return view('backend.tailieu.them',compact('loaitailieu'));
    }

    public function postAdd(TailieuRequest $request)
    {
        $files =[];
        if ($request->file('txtTLCont1')) {
            $files[] = $request->file('txtTLCont1');
        }
        if ($request->file('txtTLCont2')) {
            $files[] = $request->file('txtTLCont2');
        } 
        if ($request->file('txtTLCont3')) {
            $files[] = $request->file('txtTLCont3');
        }
        if ($request->file('txtTLCont4')) {
            $files[] = $request->file('txtTLCont4');
        } 
        if ($request->file('txtTLCont5')) {
            $files[] = $request->file('txtTLCont5');
        }

        $names =[];   

        foreach ($files as $file) {
            if(!empty($file)){
                $filename=$file->getClientOriginalName();
                $file->move(
                    base_path().'/public/upload/tailieu/', $filename
                );

                $filepdf = new tailieus; 
                $filepdf->noidung = $filename;
                $filepdf->id_loaitailieu = $request->txtTLCate;
                $filepdf->save();
            }
        }

        alert()->success('Thêm tài liệu thành công.','Thông báo');
        return redirect()->route('admin.tailieu.list');
    }

    public function getDelete($id)
    {   
    	$tailieu = DB::table('tailieus')->where('id',$id)->first();
        DB::table('tailieus')->where('id',$id)->delete();
        alert()->success('Xóa tài liệu thành công.','Thông báo');
        return redirect()->route('admin.tailieu.list');
    }

    public function getEdit($id)
    {
        $tailieu = DB::table('tailieus')->where('id',$id)->first();
        return view('backend.tailieu.sua',compact('tailieu'));
    }

    public function postEdit($id, TailieuRequest $request)
    {
        if(!empty(Request::file('fEditFile'))) {
            foreach (Request::file('fEditFile') as $file) {
                $tl_pdf = new tailieus();
                if (isset($file)) {
                    $tl_pdf->noidung = $file->getClientOriginalName();
                    $tl_pdf->id_loaitailieu = $id;
                    $file->move('public/upload/tailieu/', $file->getClientOriginalName());
                    $tl_pdf->save();
                } 
          }
        }

        alert()->success('Sửa tài liệu thành công.','Thông báo');
        return redirect()->route('admin.tailieu.list');
    }
    public function loai($id){
        $loaitailieu = DB::table('loaitailieus')->get();
        $tailieu = DB::table('tailieus')->where('id_loaitailieu',$id)->get();
        $loaitl = DB::table('loaitailieus')->where('id',$id)->first();
        return view('backend.tailieu.danhsach',compact('loaitl','tailieu','loaitailieu'));
    }
}
