<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Thêm chương trình đào tạo</title>
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
                        <a href="{!! URL::route('admin.tintuc.list') !!}" class="btn btn-danger">Quay lại</a>
                            <a class="btn btn-primary" href="{{asset('trang-quan-ly')}}" role="button">Bảng điều
                                khiển</a>
                        </div>
                        <div class="body">

                            <form action="{!! route('admin.tintuc.getAdd') !!}" method="POST"  enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                                <div class="row" style="margin-bottom:40px">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>Tiêu đề</label>
                                            <textarea class="form-control" rows="3" name="txtTTTitle" placeholder="Tiêu đề..."> {!! old('txtTTTitle') !!}</textarea>
                                            <div>
                                                {!! $errors->first('txtTTTitle') !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nội dung</label>
                                            <textarea class="form-control ckeditor" rows="3" name="txtTTConte" placeholder="Nội dung..."> {!! old('txtTTConte') !!}</textarea>
                                            <script type="text/javascript">CKEDITOR.replace('txtTTConte'); </script>
                                            <div>
                                                {!! $errors->first('txtTTConte') !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày</label>
                                            <input type="date"name="txtTTDate" value="{!! old('txtTTDate') !!}" placeholder="Ngày..." />
                                            <div>
                                                {!! $errors->first('txtTTDate') !!}
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Chọn loại tin</label>
                                            <div >
                                                <select name="txtTTCate" id="input">
                                                    <option value="0">Tin tức</option>
                                                    <option value="1">Sự kiện</option>
                                                </select>
                                            </div>
                                            <div>
                                                {!! $errors->first('txtTTCate') !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Hình ảnh </label>
                                            <input type="file" name="txtTTImage" value="{!! old('txtTTImage') !!}" >
                                            <div>
                                                {!! $errors->first('txtTTImage') !!}
                                            </div>
                                        </div>
                                        <input type="submit" name="submit" value="Thêm" class="btn btn-info">
                                        <a href="{{!! URL::route('admin.tintuc.list') !!}}" class="btn btn-danger">Hủy bỏ</a>
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