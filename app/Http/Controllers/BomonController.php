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
use App\bomons;
use App\bomontrungtams;
use Illuminate\Http\Request;

class BomonController extends Controller
{
    //Bộ môn trung tâm - Giới thiệu chung
    public function bomontrungtam()
    {
        $bomontrungtam = bomontrungtams::all();
        return view('backend.bomon.bomontrungtam',['bomontrungtam'=>$bomontrungtam]);
    }
    //Sửa bộ môn trung tâm
    public function getsuabomontrungtam($id)
    {
        $bomontrungtam= bomontrungtams::find($id);
        return view('backend.bomon.suabomontrungtam',compact('bomontrungtam'));
    }
    public function postsuabomontrungtam(Request $request,$id)
    {    
    $bomontrungtam = bomontrungtams::find($id);
    $validator = Validator::make($request->all(),[
        'gioithieuchung'=>'required|min:10',
        ]);
    if($validator->fails())
    {
        alert()->error('Lỗi rồi!', 'Không được nhập dưới 10 kí tự!');
    }
    else{
        $bomontrungtam->gioithieuchung= $request->gioithieuchung;
        $bomontrungtam->save();
        alert()->success('Thành công', 'Đã sửa!');
        
    }
    return view('backend.bomon.suabomontrungtam',['bomontrungtam'=>$bomontrungtam]);
    }
    //Bộ môn trung tâm
    public function bomontrungtamindex() {
        $bomontrungtam = bomontrungtams::all();
        return view('frontend.bomon.bomontrungtam',compact('bomontrungtam'));
    }
}
