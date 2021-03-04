<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Trang quản lý
Route::get('dang-nhap-trang-quan-ly', 'AdminController@getLog');
Route::get('trang-quan-ly', 'AdminController@homead',function(){
})->middleware('adminLogin');
//Giới thiệu chung về viện
Route::get('gioithieu', 'AdminController@gioithieu',function(){
})->middleware('adminLogin');
Route::get('suagioithieu/{id}','AdminController@getsuagioithieu',function(){
})->middleware('adminLogin');
Route::post('suagioithieu/{id}','AdminController@postsuagioithieu',function(){
})->middleware('adminLogin');
//Mô hình đào tạo
Route::get('mohinhdaotao', 'MohinhdaotaoController@mohinhdaotao',function(){
})->middleware('adminLogin');
Route::get('suamohinhdaotao/{id}','MohinhdaotaoController@getsuamohinhdaotao',function(){
})->middleware('adminLogin');
Route::post('suamohinhdaotao/{id}','MohinhdaotaoController@postsuamohinhdaotao',function(){
})->middleware('adminLogin');
Route::get('mo-hinh-dao-tao','MohinhdaotaoController@mohinhdaotaoindex');
//Đào tạo đại học
Route::get('gioithieuchung', 'DaotaodaihocController@gioithieuchung',function(){
})->middleware('adminLogin');
Route::get('suagioithieuchung/{id}','DaotaodaihocController@getsuagioithieuchung',function(){
})->middleware('adminLogin');
Route::post('suagioithieuchung/{id}','DaotaodaihocController@postsuagioithieuchung',function(){
})->middleware('adminLogin');
Route::get('gioi-thieu-chung1', 'DaotaodaihocController@gioithieuchungindex');
//Chương trình đào tạo 
Route::get('chuongtrinhdaotao','ChuongtrinhdaotaoController@chuongtrinhdaotao',function(){
})->middleware('adminLogin');
Route::get('themchuongtrinhdaotao','ChuongtrinhdaotaoController@getthemchuongtrinhdaotao',function(){
})->middleware('adminLogin');
Route::post('themchuongtrinhdaotao','ChuongtrinhdaotaoController@postthemchuongtrinhdaotao',function(){
})->middleware('adminLogin');
Route::get('suachuongtrinhdaotao/{id}','ChuongtrinhdaotaoController@getsuachuongtrinhdaotao',function(){
})->middleware('adminLogin');
Route::post('suachuongtrinhdaotao/{id}','ChuongtrinhdaotaoController@postsuachuongtrinhdaotao',function(){
})->middleware('adminLogin');
Route::get('xoachuongtrinhdaotao/{id}','ChuongtrinhdaotaoController@getxoachuongtrinhdaotao',function(){
})->middleware('adminLogin');
//Chương trình đào tạo chi tiết
Route::get('chuan-dau-ra/{id}','ChuongtrinhdaotaoController@chuandaura');
Route::get('quy-dinh-dao-tao/{id}','ChuongtrinhdaotaoController@quydinhdaotao');
//Đào tạo sau đại học
Route::get('daotaosaudh', 'DaotaosaudhController@daotaosaudh',function(){
})->middleware('adminLogin');
Route::get('suadaotaosaudh/{id}','DaotaosaudhController@getsuadaotaosaudh',function(){
})->middleware('adminLogin');
Route::post('suadaotaosaudh/{id}','DaotaosaudhController@postsuadaotaosaudh',function(){
})->middleware('adminLogin');
Route::get('dao-tao-sau-dai-hoc', 'DaotaosaudhController@daotaosaudhindex');
Route::get('danh-sach-luan-van', 'DaotaosaudhController@danhsachluanvan');
Route::get('danh-sach-nghien-cuu-sinh', 'DaotaosaudhController@danhsachnghiencuusinh');
Route::get('danh-sach-tap-chi', 'DaotaosaudhController@danhsachtapchi');
//Đào tạo thạc sỹ
Route::get('daotaothacsy', 'DaotaosaudhController@daotaothacsy',function(){
})->middleware('adminLogin');
Route::get('suadaotaothacsy/{id}','DaotaosaudhController@getsuadaotaothacsy',function(){
})->middleware('adminLogin');
Route::post('suadaotaothacsy/{id}','DaotaosaudhController@postsuadaotaothacsy',function(){
})->middleware('adminLogin');
Route::get('dao-tao-thac-sy', 'DaotaosaudhController@daotaothacsyindex');
Route::get('chuan-dau-ra', 'DaotaosaudhController@chuandaura');
Route::get('doi-tuong', 'DaotaosaudhController@doituong');
Route::get('cau-truc', 'DaotaosaudhController@cautruc');
Route::get('chuong-trinh-chuyen-doi', 'DaotaosaudhController@chuongtrinhchuyendoi');
Route::get('danh-muc-hoc-phan', 'DaotaosaudhController@danhmuchocphan');
Route::get('danh-sach-giang-vien', 'DaotaosaudhController@danhsachgiangvien');
//Đào tạo tiến sỹ
Route::get('daotaotiensy', 'DaotaosaudhController@daotaotiensy',function(){
})->middleware('adminLogin');
Route::get('suadaotaotiensy/{id}','DaotaosaudhController@getsuadaotaotiensy',function(){
})->middleware('adminLogin');
Route::post('suadaotaotiensy/{id}','DaotaosaudhController@postsuadaotaotiensy',function(){
})->middleware('adminLogin');
Route::get('dao-tao-tien-sy', 'DaotaosaudhController@daotaotiensyindex');
Route::get('kinh-te-hoc', 'DaotaosaudhController@kinhtehoc');
Route::get('dau-ra-kinh-te-hoc', 'DaotaosaudhController@daurakinhtehoc');
Route::get('quan-ly-cong-nghiep', 'DaotaosaudhController@quanlycongnghiep');
Route::get('dau-ra-quan-ly-cong-nghiep', 'DaotaosaudhController@dauraquanlycongnghiep');
//Bộ môn - Trung tâm
Route::get('bomontrungtam', 'BomonController@bomontrungtam',function(){
})->middleware('adminLogin');
Route::get('suabomontrungtam/{id}','BomonController@getsuabomontrungtam',function(){
})->middleware('adminLogin');
Route::post('suabomontrungtam/{id}','BomonController@postsuabomontrungtam',function(){
})->middleware('adminLogin');
Route::get('bo-mon-trung-tam', 'BomonController@bomontrungtamindex');
//Chi tiết bộ môn
Route::get('bomon','BomonController@bomon',function(){
})->middleware('adminLogin');
Route::get('thembomon','BomonController@getthembomon',function(){
})->middleware('adminLogin');
Route::post('thembomon','BomonController@postthembomon',function(){
})->middleware('adminLogin');
Route::get('suabomon/{id}','BomonController@getsuabomon',function(){
})->middleware('adminLogin');
Route::post('suabomon/{id}','BomonController@postsuabomon',function(){
})->middleware('adminLogin');
Route::get('xoabomon/{id}','BomonController@getxoabomon',function(){
})->middleware('adminLogin');
//Danh mục chi tiết bộ môn
Route::get('gioi-thieu-chung4/{id}','BomonController@gioithieuchung4');
Route::get('huong-nghien-cuu/{id}','BomonController@huongnghiencuu');
Route::get('cong-trinh-khoa-hoc/{id}','BomonController@congtrinhkhoahoc');
Route::get('hoc-phan-dam-nhan/{id}','BomonController@hocphandamnhan');
Route::get('co-so-vat-chat/{id}','BomonController@cosovatchat');
Route::get('sach-da-xuat-ban/{id}','BomonController@sachdaxuatban');
Route::get('can-bo-giang-vien/{id}','GiangvienController@canbogiangvien');
//Giảng viên
Route::get('giangvien','GiangvienController@giangvien',function(){
})->middleware('adminLogin');
Route::get('themgiangvien','GiangvienController@getthemgiangvien',function(){
})->middleware('adminLogin');
Route::post('themgiangvien','GiangvienController@postthemgiangvien',function(){
})->middleware('adminLogin');
Route::get('suagiangvien/{id}','GiangvienController@getsuagiangvien',function(){
})->middleware('adminLogin');
Route::post('suagiangvien/{id}','GiangvienController@postsuagiangvien',function(){
})->middleware('adminLogin');
Route::get('xoagiangvien/{id}','GiangvienController@getxoagiangvien',function(){
})->middleware('adminLogin');
Route::get('chi-tiet-giang-vien/{id}','GiangvienController@chitietgiangvien');
//Slide
Route::get('slide','SlideController@slide',function(){
})->middleware('adminLogin');
Route::get('themslide','SlideController@getthemslide',function(){
})->middleware('adminLogin');
Route::post('themslide','SlideController@postthemslide',function(){
})->middleware('adminLogin');
Route::get('suaslide/{id}','SlideController@getsuaslide',function(){
})->middleware('adminLogin');
Route::post('suaslide/{id}','SlideController@postsuaslide',function(){
})->middleware('adminLogin');
Route::get('xoaslide/{id}','SlideController@getxoaslide',function(){
})->middleware('adminLogin');
//Trang chủ
Route::get('trang-chu', 'AdminController@trangchu');
Route::post('/login', 'AdminController@login');
Route::get('/logout', 'AdminController@logout');

//Tin tức
Route::group(['prefix' => 'tintuc'], function() {
    Route::get('danhsach',['as'=>'admin.tintuc.list','uses'=>'TintucController@getList']);
    Route::get('them',['as'=>'admin.tintuc.getAdd','uses'=>'TintucController@getAdd']);
    Route::post('them',['as'=>'admin.tintuc.postAdd','uses'=>'TintucController@postAdd']);
    Route::get('xoa/{id}',['as'=>'admin.tintuc.getDelete','uses'=>'TintucController@getDelete']);
    Route::get('sua/{id}',['as'=>'admin.tintuc.getEdit','uses'=>'TintucController@getEdit']);
    Route::post('sua/{id}',['as'=>'admin.tintuc.postEdit','uses'=>'TintucController@postEdit']);
});
//Bộ sưu tập
Route::group(['prefix' => 'bosuutap'], function() {
    Route::get('danhsach/{id}',['as'=>'admin.bosuutap.loai','uses'=>'BosuutapController@loai']);
    Route::get('danhsach',['as'=>'admin.bosuutap.list','uses'=>'BosuutapController@getList']);
    Route::get('them',['as'=>'admin.bosuutap.getAdd','uses'=>'BosuutapController@getAdd']);
    Route::post('them',['as'=>'admin.bosuutap.postAdd','uses'=>'BosuutapController@postAdd']);
    Route::get('xoa/{id}',['as'=>'admin.bosuutap.getDelete','uses'=>'BosuutapController@getDelete']);
});

//Loại bộ sưu tập
Route::group(['prefix' => 'loaibosuutap'], function() {
    Route::get('danhsach',['as'=>'admin.loaibosuutap.list','uses'=>'LoaibosuutapController@getList']);
    Route::get('them',['as'=>'admin.loaibosuutap.getAdd','uses'=>'LoaibosuutapController@getAdd']);
    Route::post('them',['as'=>'admin.loaibosuutap.postAdd','uses'=>'LoaibosuutapController@postAdd']);
    Route::get('xoa/{id}',['as'=>'admin.loaibosuutap.getDelete','uses'=>'LoaibosuutapController@getDelete']);
    Route::get('sua/{id}',['as'=>'admin.loaibosuutap.getEdit','uses'=>'LoaibosuutapController@getEdit']);
    Route::post('sua/{id}',['as'=>'admin.loaibosuutap.postEdit','uses'=>'LoaibosuutapController@postEdit']);
});

//Bộ sưu tập trang web
Route::get('bo-suu-tap','AdminController@bstweb');
Route::get('bo-suu-tap/{url}','AdminController@xembstloai');

// tin tức trang web
Route::get('tin-tuc','AdminController@tintuc');
Route::get('su-kien','AdminController@sukien');
Route::get('tin-tuc-su-kien/{url}','AdminController@chitiettintucsukien');
// 
//tài liệu
Route::group(['prefix' => 'tailieu'], function() {
    Route::get('danhsach/{id}',['as'=>'admin.tailieu.loai','uses'=>'TailieuController@loai']);
    Route::get('danhsach',['as'=>'admin.tailieu.list','uses'=>'TailieuController@getList']);
    Route::get('them',['as'=>'admin.tailieu.getAdd','uses'=>'TailieuController@getAdd']);
    Route::post('them',['as'=>'admin.tailieu.postAdd','uses'=>'TailieuController@postAdd']);
    Route::get('xoa/{id}',['as'=>'admin.tailieu.getDelete','uses'=>'TailieuController@getDelete']);
});

//Loại tài liệu
Route::group(['prefix' => 'loaitailieu'], function() {
    Route::get('danhsach',['as'=>'admin.loaitailieu.list','uses'=>'LoaitailieuController@getList']);
    Route::get('them',['as'=>'admin.loaitailieu.getAdd','uses'=>'LoaitailieuController@getAdd']);
    Route::post('them',['as'=>'admin.loaitailieu.postAdd','uses'=>'LoaitailieuController@postAdd']);
    Route::get('xoa/{id}',['as'=>'admin.loaitailieu.getDelete','uses'=>'LoaitailieuController@getDelete']);
    Route::get('sua/{id}',['as'=>'admin.loaitailieu.getEdit','uses'=>'LoaitailieuController@getEdit']);
    Route::post('sua/{id}',['as'=>'admin.loaitailieu.postEdit','uses'=>'LoaitailieuController@postEdit']);
});

// học phần
Route::group(['prefix' => 'hocphan'], function() {
    Route::get('danhsach',['as'=>'admin.hocphan.list','uses'=>'HocphanController@getList']);
    Route::get('them',['as'=>'admin.hocphan.getAdd','uses'=>'HocphanController@getAdd']);
    Route::post('them',['as'=>'admin.hocphan.postAdd','uses'=>'HocphanController@postAdd']);
    Route::get('xoa/{id}',['as'=>'admin.hocphan.getDelete','uses'=>'HocphanController@getDelete']);
    Route::get('sua/{id}',['as'=>'admin.hocphan.getEdit','uses'=>'HocphanController@getEdit']);
    Route::post('sua/{id}',['as'=>'admin.hocphan.postEdit','uses'=>'HocphanController@postEdit']);
});

// tài liệu web
Route::get('tai-lieu','AdminController@tlweb');
Route::get('tai-lieu/{url}','AdminController@xemtlloai');