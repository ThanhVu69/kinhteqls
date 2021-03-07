<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sửa thành viên ban chấp hành</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
        type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

 <!-- Bootstrap Core Css -->
 <link href="{{asset('/backend/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

<!-- Waves Effect Css -->
<link href="{{asset('/backend/plugins/node-waves/waves.css')}}" rel="stylesheet" />

<!-- Animation Css -->
<link href="{{asset('/backend/plugins/animate-css/animate.css')}}" rel="stylesheet" />

 <!-- Bootstrap Select Css -->
 <link href="{{asset('/backend/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />


<!-- Custom Css -->
<link href="{{asset('/backend/css/style.css')}}" rel="stylesheet">

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="{{asset('/backend/css/themes/all-themes.css')}}" rel="stylesheet" />
</head>

<body class="theme-red">
    @include('backend.header')
    @include('sweetalert::alert')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Nội dung</h2>
            </div>
            <!-- CKEditor -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <a class="btn btn-primary" href="{!! URL::route('admin.banchaphanh.list') !!}" role="button">Quay lại</a>
                            <a class="btn btn-primary" href="{{asset('trang-quan-ly')}}" role="button">Bảng điều
                                khiển</a>
                        </div>
                        <div class="body">
                            <form action="" method="POST"  enctype="multipart/form-data" name="frmEditPro">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                                <div class="row" style="margin-bottom:40px">
                                    <div class="col-xs-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Họ và tên</label>
                                            <input required type="text" name="txtBCHName" value="{!! $banchaphanh->hoten !!}" placeholder="Nhập Họ và tên..." class="form-control">
                                            <div>
                                                {!! $errors->first('txtBCHName') !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Mã số sinh viên</label>
                                            <input required type="text" name="txtBCHCod" value="{!! $banchaphanh->masosv !!}" placeholder="Nhập Mã số sinh viên" class="form-control">
                                            <div>
                                                {!! $errors->first('txtBCHCod') !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Lớp sinh viên</label>
                                            <input required type="text" name="txtBCHClass" value="{!! $banchaphanh->lop !!}" placeholder="Nhập Lớp sinh viên" class="form-control">
                                            <div>
                                                {!! $errors->first('txtBCHClass') !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Hình ảnh </label>
                                            <br>
                                            <img src="{!! asset('resources/upload/banchaphanh/'.$banchaphanh->anh) !!}" class="img-responsive img-rounded" alt="Image" style="width: 150px; height: 200px;">
                                            <input type="hidden" name="fImageCurrent" value="{!! $banchaphanh->anh !!}">
                                            <input type="file" name="fImage" >
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input required type="text" name="txtBCHMail" value="{!! $banchaphanh->email !!}" placeholder="Nhập Email" class="form-control">
                                            <div>
                                                {!! $errors->first('txtBCHMail') !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Chức vụ</label>
                                            <input required type="text" name="txtBCHPos" value="{!! $banchaphanh->chucvu !!}" placeholder="Nhập Chức vụ" class="form-control">
                                            <div>
                                                {!! $errors->first('txtBCHPos') !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Số điện thoại</label>
                                            <input required type="text" name="txtBCHPhone" value="{!! $banchaphanh->sdt !!}" placeholder="Nhập Số điện thoại" class="form-control">
                                            <div>
                                                {!! $errors->first('txtBCHPhone') !!}
                                            </div>
                                        </div>
                                        <input type="submit" name="submit" value="Sửa" class="btn btn-primary">
                                        <a href="{!! URL::route('admin.banchaphanh.list') !!}" class="btn btn-danger">Hủy bỏ</a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CKEditor -->
        </div>
    </section>

     <!-- Jquery Core Js -->
     <script src="{{asset('/backend/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core Js -->
<script src="{{asset('/backend/plugins/bootstrap/js/bootstrap.js')}}"></script>

<!-- Select Plugin Js -->
<script src="{{asset('/backend/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{asset('/backend/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{asset('/backend/plugins/node-waves/waves.js')}}"></script>

<!-- Ckeditor -->
<script src="{{asset('/backend/plugins/ckeditor/ckeditor.js')}}"></script>

<!-- TinyMCE -->
<script src="{{asset('/backend/plugins/tinymce/tinymce.js')}}"></script>

<!-- Custom Js -->
<script src="{{asset('/backend/js/admin.js')}}"></script>
<script src="{{asset('/backend/js/pages/forms/editors.js')}}"></script>

<!-- Demo Js -->
<script src="{{asset('/backend/js/demo.js')}}"></script>
</body>

</html>