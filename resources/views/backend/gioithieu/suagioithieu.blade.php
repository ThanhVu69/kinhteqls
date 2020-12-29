<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sửa Giới thiệu</title>
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

    <!-- JQuery DataTable Css -->
    <link href="{{asset('/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}"
        rel="stylesheet">

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
                            <a class="btn btn-primary" href="{{asset('gioithieu')}}" role="button">Quay lại</a>
                            <a class="btn btn-primary" href="{{asset('trang-quan-ly')}}" role="button">Bảng điều
                                khiển</a>
                        </div>
                        <div class="body">
                            <form action="/suagioithieu/{{$gioithieu->id}}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                <div class="row" style="margin-bottom:40px">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                        <label>Thư ngỏ</label>
                                            <textarea name="thungo" class="form-control ckeditor">{{$gioithieu->thungo}}</textarea>
                                        </div>
                                        <div class="form-group">
                                        <label>Lịch sử hình thành</label>
                                            <textarea name="lichsu" class="form-control ckeditor">{{$gioithieu->lichsu}}</textarea>
                                        </div>
                                        <div class="form-group">
                                        <label>Cơ cấu tổ chức</label>
                                            <textarea name="cocau" class="form-control ckeditor">{{$gioithieu->cocau}}</textarea>
                                        </div>
                                        <div class="form-group">
                                        <label>Cán bộ giảng viên</label>
                                            <textarea name="canbo" class="form-control ckeditor">{{$gioithieu->canbo}}</textarea>
                                        </div>
                                        <div class="form-group">
                                        <label>Cơ sở vật chất</label>
                                            <textarea name="cosovatchat" class="form-control ckeditor">{{$gioithieu->cosovatchat}}</textarea>
                                        </div>
                                        <div class="form-group">
                                        <label>Thông tin liên hệ</label>
                                            <textarea name="thongtin" class="form-control ckeditor">{{$gioithieu->thongtin}}</textarea>
                                        </div>
                                        <input type="submit" name="submit" value="Sửa" class="btn btn-primary">
                                        <a href="{{asset('gioithieu')}}" class="btn btn-danger">Hủy bỏ</a>
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
    <!-- <script src="{{asset('/backend/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script> -->

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