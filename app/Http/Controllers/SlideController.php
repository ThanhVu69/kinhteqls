<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Validator;
use Alert;
use RealRashid\SweetAlert\Facades\Aler;
use App\User;
use App\slides;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    //Danh sách bộ môn
    public function slide()
    {
        $slide= slides::all();
        return view('backend.slide.slide',['slide'=>$slide]);
    }
    //Sửa slide
    public function getsuaslide($id)
    {
        $suaslide= slides::find($id);
        return view('backend.slide.suaslide',compact('suaslide'));
    }
    public function postsuaslide(Request $request,$id)
    {    
    $suaslide = slides::find($id);
    $validator = Validator::make($request->all(),[
        'trichdan'=>'required|min:1',
        ]);
        $validator = Validator::make($request->all(),[
            'anh' => 'image|mimes:jpeg,jpg,png,gif'
            ]);
        if ($validator->fails())
        {
            alert()->error('Lỗi rồi!', 'Không nhập ảnh quá 2MB!, Định dạng ảnh phải là jepg, jpg và png');
        }
    else{
        $suaslide->trichdan= $request->trichdan;
        if($request->hasFile('anh'))
            {
                $file = $request->file('anh');

                $name = $file->getClientOriginalName();
                $anh = Str::random(4)."_".$name;
                while(file_exists("upload/slide/".$anh))
                {
                    $anh = Str::random(4)."_".$name;
                }
                $file->move("upload/slide",$anh);
                // unlink("upload/slide/".$suaslide->anh);
                $suaslide->anh = $anh;
            }
            
        $suaslide->save();
        alert()->success('Thành công', 'Đã sửa!');
        
    }
    return view('backend.slide.suaslide',['suaslide'=>$suaslide]);
    }
    //Xóa Slide
    public function getxoaslide($id)
    {
        $slide = slides::find($id);
            unlink("upload/slide/".$slide->anh);
        $slide->delete();
        echo"<script>
    alert('Xóa thành công!');
    window.location = ' ".url('slide')."'
    </script>";
    }
}
