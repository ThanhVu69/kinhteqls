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
Route::get('trang-quan-ly', 'AdminController@homead');
//Mô hình đào tạo
Route::get('mohinhdaotao', 'MohinhdaotaoController@mohinhdaotao');
Route::get('suamohinhdaotao/{id}','MohinhdaotaoController@getsuamohinhdaotao');
Route::post('suamohinhdaotao/{id}','MohinhdaotaoController@postsuamohinhdaotao');
Route::get('mo-hinh-dao-tao','MohinhdaotaoController@mohinhdaotaoindex');
//Đào tạo đại học
Route::get('gioithieuchung', 'DaotaodaihocController@gioithieuchung');
Route::get('suagioithieuchung/{id}','DaotaodaihocController@getsuagioithieuchung');
Route::post('suagioithieuchung/{id}','DaotaodaihocController@postsuagioithieuchung');
Route::get('gioi-thieu-chung1', 'DaotaodaihocController@gioithieuchungindex');
//Chương trình đào tạo 
Route::get('chuongtrinhdaotao','ChuongtrinhdaotaoController@chuongtrinhdaotao');
Route::get('themchuongtrinhdaotao','ChuongtrinhdaotaoController@getthemchuongtrinhdaotao');
Route::post('themchuongtrinhdaotao','ChuongtrinhdaotaoController@postthemchuongtrinhdaotao');
Route::get('suachuongtrinhdaotao/{id}','ChuongtrinhdaotaoController@getsuachuongtrinhdaotao');
Route::post('suachuongtrinhdaotao/{id}','ChuongtrinhdaotaoController@postsuachuongtrinhdaotao');
Route::get('xoachuongtrinhdaotao/{id}','ChuongtrinhdaotaoController@getxoachuongtrinhdaotao');
//Chương trình đào tạo chi tiết
Route::get('chuan-dau-ra/{id}','ChuongtrinhdaotaoController@chuandaura');
Route::get('quy-dinh-dao-tao/{id}','ChuongtrinhdaotaoController@quydinhdaotao');
//Đào tạo sau đại học
Route::get('daotaosaudh', 'DaotaosaudhController@daotaosaudh');
Route::get('suadaotaosaudh/{id}','DaotaosaudhController@getsuadaotaosaudh');
Route::post('suadaotaosaudh/{id}','DaotaosaudhController@postsuadaotaosaudh');
Route::get('dao-tao-sau-dai-hoc', 'DaotaosaudhController@daotaosaudhindex');
Route::get('danh-sach-luan-van', 'DaotaosaudhController@danhsachluanvan');
Route::get('danh-sach-nghien-cuu-sinh', 'DaotaosaudhController@danhsachnghiencuusinh');
Route::get('danh-sach-tap-chi', 'DaotaosaudhController@danhsachtapchi');
//Đào tạo thạc sỹ
Route::get('daotaothacsy', 'DaotaosaudhController@daotaothacsy');
Route::get('suadaotaothacsy/{id}','DaotaosaudhController@getsuadaotaothacsy');
Route::post('suadaotaothacsy/{id}','DaotaosaudhController@postsuadaotaothacsy');
Route::get('dao-tao-thac-sy', 'DaotaosaudhController@daotaothacsyindex');
Route::get('chuan-dau-ra', 'DaotaosaudhController@chuandaura');
Route::get('doi-tuong', 'DaotaosaudhController@doituong');
Route::get('cau-truc', 'DaotaosaudhController@cautruc');
Route::get('chuong-trinh-chuyen-doi', 'DaotaosaudhController@chuongtrinhchuyendoi');
Route::get('danh-muc-hoc-phan', 'DaotaosaudhController@danhmuchocphan');
Route::get('danh-sach-giang-vien', 'DaotaosaudhController@danhsachgiangvien');
//Đào tạo tiến sỹ
Route::get('daotaotiensy', 'DaotaosaudhController@daotaotiensy');
Route::get('suadaotaotiensy/{id}','DaotaosaudhController@getsuadaotaotiensy');
Route::post('suadaotaotiensy/{id}','DaotaosaudhController@postsuadaotaotiensy');
Route::get('dao-tao-tien-sy', 'DaotaosaudhController@daotaotiensyindex');
Route::get('kinh-te-hoc', 'DaotaosaudhController@kinhtehoc');
Route::get('dau-ra-kinh-te-hoc', 'DaotaosaudhController@daurakinhtehoc');
Route::get('quan-ly-cong-nghiep', 'DaotaosaudhController@quanlycongnghiep');
Route::get('dau-ra-quan-ly-cong-nghiep', 'DaotaosaudhController@dauraquanlycongnghiep');
//Bộ môn - Trung tâm
Route::get('bomontrungtam', 'BomonController@bomontrungtam');
Route::get('suabomontrungtam/{id}','BomonController@getsuabomontrungtam');
Route::post('suabomontrungtam/{id}','BomonController@postsuabomontrungtam');
Route::get('bo-mon-trung-tam', 'BomonController@bomontrungtamindex');
//Trang chủ
Route::get('trang-chu', 'AdminController@trangchu');
Route::post('/login', 'AdminController@login');
Route::get('/logout', 'AdminController@logout');