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
use App\chuongtrinhdaotaos;
use App\daotaodaihocs;
use App\daotaosaudhs;
use App\daotaothacsys;
use App\daotaotiensys;
use Illuminate\Http\Request;

class DaotaosaudhController extends Controller
{
//Đào tạo sau đại học tạo admin
    public function daotaosaudh()
    {
        $daotaosaudh = daotaosaudhs::all();
        return view('backend.daotaosaudh.daotaosaudh',['daotaosaudh'=>$daotaosaudh]);
    }
//Sửa đào tạo sau đại học
    public function getsuadaotaosaudh($id)
    {
        $daotaosaudh= daotaosaudhs::find($id);
        return view('backend.daotaosaudh.suadaotaosaudh',compact('daotaosaudh'));
    }
    public function postsuadaotaosaudh(Request $request,$id)
    {    
    $daotaosaudh = daotaosaudhs::find($id);
    $validator = Validator::make($request->all(),[
        'gioithieuchung'=>'required|min:10',
        ]);
    if($validator->fails())
    {
        alert()->error('Lỗi rồi!', 'Không được nhập dưới 10 kí tự!');
    }
    else{
        $daotaosaudh->gioithieuchung= $request->gioithieuchung;
        $daotaosaudh->danhsachluanvan= $request->danhsachluanvan;
        $daotaosaudh->danhsachnghiencuusinh= $request->danhsachnghiencuusinh;
        $daotaosaudh->danhsachtapchi= $request->danhsachtapchi;
        $daotaosaudh->save();
        alert()->success('Thành công', 'Đã sửa!');
        
    }
    return view('backend.daotaosaudh.suadaotaosaudh',['daotaosaudh'=>$daotaosaudh]);
    }
//Đào tạo sau đại học
    public function daotaosaudhindex() {
        $daotaosaudh = daotaosaudhs::all();
        return view('frontend.daotaosaudh.daotaosaudh',compact('daotaosaudh'));
    }
//Danh sách luận văn
    public function danhsachluanvan() {
        $daotaosaudh = daotaosaudhs::all();
        return view('frontend.daotaosaudh.danhsachluanvan',compact('daotaosaudh'));
    }
//Danh sách nghiên cứu sinh
    public function danhsachnghiencuusinh() {
        $daotaosaudh = daotaosaudhs::all();
        return view('frontend.daotaosaudh.danhsachnghiencuusinh',compact('daotaosaudh'));
    }
//Danh sách tạp chí
    public function danhsachtapchi() {
        $daotaosaudh = daotaosaudhs::all();
        return view('frontend.daotaosaudh.danhsachtapchi',compact('daotaosaudh'));
    }
//Đào tạo thạc sỹ admin
    public function daotaothacsy()
    {
        $daotaothacsy = daotaothacsys::all();
        return view('backend.daotaosaudh.daotaothacsy',['daotaothacsy'=>$daotaothacsy]);
    }
//Sửa đào tạo thạc sỹ
    public function getsuadaotaothacsy($id)
    {
        $daotaothacsy= daotaothacsys::find($id);
        return view('backend.daotaosaudh.suadaotaothacsy',compact('daotaothacsy'));
    }
    public function postsuadaotaothacsy(Request $request,$id)
    {    
    $daotaothacsy = daotaothacsys::find($id);
    $validator = Validator::make($request->all(),[
        'gioithieuchung'=>'required|min:10',
        'chuandaura'=>'required|min:1',
        'doituong'=>'required|min:1',
        'chuongtrinhchuyendoi'=>'required|min:1',
        'danhmuchocphan'=>'required|min:1',
        'danhsachgiangvien'=>'required|min:1',
        ]);
    if($validator->fails())
    {
        alert()->error('Lỗi rồi!', 'Không được nhập dưới 10 kí tự!');
    }
    else{
        $daotaothacsy->gioithieuchung= $request->gioithieuchung;
        $daotaothacsy->chuandaura= $request->chuandaura;
        $daotaothacsy->doituong= $request->doituong;
        $daotaothacsy->cautruc= $request->cautruc;
        $daotaothacsy->chuongtrinhchuyendoi= $request->chuongtrinhchuyendoi;
        $daotaothacsy->danhmuchocphan= $request->danhmuchocphan;
        $daotaothacsy->danhsachgiangvien= $request->danhsachgiangvien;
        $daotaothacsy->save();
        alert()->success('Thành công', 'Đã sửa!');
        
    }
    return view('backend.daotaosaudh.suadaotaothacsy',['daotaothacsy'=>$daotaothacsy]);
    }
//Đào tạo thạc sỹ
    public function daotaothacsyindex() {
        $daotaothacsy = daotaothacsys::all();
        return view('frontend.daotaosaudh.daotaothacsy',compact('daotaothacsy'));
    }
//Chuẩn đầu ra của chương trình
    public function chuandaura() {
        $daotaothacsy = daotaothacsys::all();
        return view('frontend.daotaosaudh.chuandaura',compact('daotaothacsy'));
    }
//Đối tượng tuyển sinh
    public function doituong() {
        $daotaothacsy = daotaothacsys::all();
        return view('frontend.daotaosaudh.doituong',compact('daotaothacsy'));
    }
//Cấu trúc chương trình
    public function cautruc() {
        $daotaothacsy = daotaothacsys::all();
        return view('frontend.daotaosaudh.cautruc',compact('daotaothacsy'));
    }
//Chương trình chuyển đổi
    public function chuongtrinhchuyendoi() {
        $daotaothacsy = daotaothacsys::all();
        return view('frontend.daotaosaudh.chuongtrinhchuyendoi',compact('daotaothacsy'));
    }
//Danh mục học phần
    public function danhmuchocphan() {
        $daotaothacsy = daotaothacsys::all();
        return view('frontend.daotaosaudh.danhmuchocphan',compact('daotaothacsy'));
    }
//Danh sách giảng viên
    public function danhsachgiangvien() {
        $daotaothacsy = daotaothacsys::all();
        return view('frontend.daotaosaudh.danhsachgiangvien',compact('daotaothacsy'));
    }
//Đào tạo tiến sỹ admin
    public function daotaotiensy()
    {
        $daotaotiensy = daotaotiensys::all();
        return view('backend.daotaosaudh.daotaotiensy',['daotaotiensy'=>$daotaotiensy]);
    }
//Sửa đào tạo tiến sỹ
    public function getsuadaotaotiensy($id)
    {
        $daotaotiensy= daotaotiensys::find($id);
        return view('backend.daotaosaudh.suadaotaotiensy',compact('daotaotiensy'));
    }
    public function postsuadaotaotiensy(Request $request,$id)
    {    
    $daotaotiensy = daotaotiensys::find($id);
    $validator = Validator::make($request->all(),[
        'gioithieuchung'=>'required|min:10',
        'kinhtehoc'=>'required|min:1',
        'daurakinhtehoc'=>'required|min:1',
        'quanlycongnghiep'=>'required|min:1',
        'dauraquanlycongnghiep'=>'required|min:1',
        ]);
    if($validator->fails())
    {
        alert()->error('Lỗi rồi!', 'Không được nhập dưới 10 kí tự!');
    }
    else{
        $daotaotiensy->gioithieuchung= $request->gioithieuchung;
        $daotaotiensy->kinhtehoc= $request->kinhtehoc;
        $daotaotiensy->daurakinhtehoc= $request->daurakinhtehoc;
        $daotaotiensy->quanlycongnghiep= $request->quanlycongnghiep;
        $daotaotiensy->dauraquanlycongnghiep= $request->dauraquanlycongnghiep;
        $daotaotiensy->save();
        alert()->success('Thành công', 'Đã sửa!');
        
    }
    return view('backend.daotaosaudh.suadaotaotiensy',['daotaotiensy'=>$daotaotiensy]);
    }
//Đào tạo tiến sỹ
    public function daotaotiensyindex() {
        $daotaotiensy = daotaotiensys::all();
        return view('frontend.daotaosaudh.daotaotiensy',compact('daotaotiensy'));
    }
//Chương trình tiến sỹ Kinh tế học
    public function kinhtehoc() {
        $daotaotiensy = daotaotiensys::all();
        return view('frontend.daotaosaudh.kinhtehoc',compact('daotaotiensy'));
    }
//Chuẩn đầu ra tiến sỹ Kinh tế học
    public function daurakinhtehoc() {
        $daotaotiensy = daotaotiensys::all();
        return view('frontend.daotaosaudh.daurakinhtehoc',compact('daotaotiensy'));
    }
//Chương trình tiến sỹ Quản lý công nghiệp
    public function quanlycongnghiep() {
        $daotaotiensy = daotaotiensys::all();
        return view('frontend.daotaosaudh.quanlycongnghiep',compact('daotaotiensy'));
    }
//Chuẩn đầu ra tiến sỹ Quản lý công nghiệp
    public function dauraquanlycongnghiep() {
        $daotaotiensy = daotaotiensys::all();
        return view('frontend.daotaosaudh.dauraquanlycongnghiep',compact('daotaotiensy'));
    }
}
