<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sửa đào tạo tiến sỹ</title>
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
                <h2>Sửa đào tạo tiến sỹ</h2>
            </div>
            <!-- CKEditor -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <a class="btn btn-primary" href="{{asset('daotaotiensy')}}" role="button">Quay lại</a>
                            <a class="btn btn-primary" href="{{asset('trang-quan-ly')}}" role="button">Bảng điều
                                khiển</a>
                        </div>
                        <div class="body">

                            <form action="/suadaotaotiensy/{{$daotaotiensy->id}}" method="POST">
                                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                <div class="row" style="margin-bottom:40px">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>Giới thiệu chung</label>
                                            <textarea name="gioithieuchung"
                                                class="form-control ckeditor"> {{$daotaotiensy->gioithieuchung}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Chương trình tiến sỹ Kinh tế học</label>
                                            <textarea name="kinhtehoc"
                                                class="form-control ckeditor"> {{$daotaotiensy->kinhtehoc}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Chuẩn đầu ra tiến sỹ Kinh tế học</label>
                                            <textarea name="daurakinhtehoc"
                                                class="form-control ckeditor"> {{$daotaotiensy->daurakinhtehoc}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Chương trình tiến sỹ Quản lý công nghiệp</label>
                                            <textarea name="quanlycongnghiep"
                                                class="form-control ckeditor"> {{$daotaotiensy->quanlycongnghiep}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Chuẩn đầu ra tiến sỹ Quản lý công nghiệp</label>
                                            <textarea name="dauraquanlycongnghiep"
                                                class="form-control ckeditor"> {{$daotaotiensy->dauraquanlycongnghiep}}</textarea>
                                        </div>
                                        <input type="submit" name="submit" value="Sửa" class="btn btn-primary">
                                        <a href="{{asset('daotaotiensy')}}" class="btn btn-danger">Hủy bỏ</a>
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