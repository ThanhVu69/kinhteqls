<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sửa Giảng viên</title>
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
                            <a class="btn btn-primary" href="{{asset('giangvien')}}" role="button">Quay lại</a>
                            <a class="btn btn-primary" href="{{asset('trang-quan-ly')}}" role="button">Bảng điều
                                khiển</a>
                        </div>
                        <div class="body">
                            <form action="/suagiangvien/{{$giangvien->id}}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                <div class="row" style="margin-bottom:40px">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>Ảnh đại diện</label>
                                            <p>
                                            <img style="width: auto; height:100px" src="/upload/giangvien/{{$giangvien->anh}}" />
                                            </p>
                                            <input type="file" name="anh" value
                                            class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Họ và tên</label>
                                            <input required type="text" name="hoten" value="{{$giangvien->hoten}}"
                                            class="form-control">
                                        </div>
                                        <div class="form-group">
                                        <label>Bộ môn</label>
                                        <select class="custom-select my-1 mr-sm-2" name="id_bomon" id="inlineFormCustomSelectPref">
                                            @foreach($bomon as $ch)
                                            <option @if($giangvien->id_bomon == $ch->id)
                                            {{"selected"}}
                                            @endif
                                            value="{{$ch->id}}">{{$ch->tenbomon}}
                                            </option>
                                            @endforeach
                                        </select>
                                        </div>                                        
                                        <div class="form-group">
                                            <label>Địa chỉ làm việc</label>
                                            <input required type="text" name="diachilamviec" value="{{$giangvien->diachilamviec}}" 
                                            class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input required type="text" name="email" value="{{$giangvien->email}}"
                                            class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Số điện thoại</label>
                                            <input required type="text" name="sdt" value="{{$giangvien->sdt}}"
                                            class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Chức vụ</label>
                                            <input required type="text" name="chucvu" value="{{$giangvien->chucvu}}"  
                                            class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Website</label>
                                            <input required type="text" name="website" value="{{$giangvien->website}}"
                                            class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Môn giảng dạy</label>
                                            <input required type="text" name="mongiangday" value="{{$giangvien->mongiangday}}"
                                            class="form-control">
                                        </div>
                                        <input type="submit" name="submit" value="Sửa" class="btn btn-primary">
                                        <a href="{{asset('giangvien')}}" class="btn btn-danger">Hủy bỏ</a>
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
    <!-- <script src="{{asset('/backend/plugins/ckeditor/ckeditor.js')}}"></script> -->

    <!-- TinyMCE -->
    <script src="{{asset('/backend/plugins/tinymce/tinymce.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('/backend/js/admin.js')}}"></script>
    <!-- <script src="{{asset('/backend/js/pages/forms/editors.js')}}"></script> -->

    <!-- Demo Js -->
    <script src="{{asset('/backend/js/demo.js')}}"></script>
</body>

</html>