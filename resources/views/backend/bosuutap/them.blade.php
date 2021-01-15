<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Thêm bộ sưu tập</title>
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
                        <a href="{!! URL::route('admin.bosuutap.list') !!}" class="btn btn-danger">Quay lại</a>
                            <a class="btn btn-primary" href="{{asset('trang-quan-ly')}}" role="button">Bảng điều
                                khiển</a>
                        </div>
                        <div class="body">

                            <form action="{!! route('admin.bosuutap.getAdd') !!}" method="POST"  enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                                <div class="row" style="margin-bottom:40px">
                                        
                                        <div class="form-group">
                                            <label>Chọn loại bộ sưu tập</label>
                                            <div >
                                                <select name="txtBSTCate" id="input">
                                                    <option >--Chọn loại bộ sưu tập--</option>
                                                    @foreach($loai as $item)
                                                    <option value="{!! $item->id !!}">{!! $item->ten !!}</option> 
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div>
                                                {!! $errors->first('txtBSTCate') !!}
                                            </div>
                                            
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Chọn ảnh</label>
                                                <input type="file" name="txtBSTImage1" value="{!! old('txtBSTImage1') !!}" >
                                                <div>
                                                    {!! $errors->first('txtBSTImage1') !!}
                                                </div>
                                                <br>
                                                <input type="file" name="txtBSTImage2" value="{!! old('txtBSTImage2') !!}" >
                                                <div>
                                                    {!! $errors->first('txtBSTImage2') !!}
                                                </div><br>
                                                <input type="file" name="txtBSTImage3" value="{!! old('txtBSTImage3') !!}" >
                                                <div>
                                                    {!! $errors->first('txtBSTImage3') !!}
                                                </div><br>
                                                <input type="file" name="txtBSTImage4" value="{!! old('txtBSTImage4') !!}" >
                                                <div>
                                                    {!! $errors->first('txtBSTImage4') !!}
                                                </div><br>
                                                <input type="file" name="txtBSTImage5" value="{!! old('txtBSTImage5') !!}" >
                                                <div>
                                                    {!! $errors->first('txtBSTImage5') !!}
                                                </div><br>
                                            </div>
                                        </div>

                                        <input type="submit" name="submit" value="Thêm" class="btn btn-info">
                                        <a href="{{!! URL::route('admin.bosuutap.list') !!}}" class="btn btn-danger">Hủy bỏ</a>
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