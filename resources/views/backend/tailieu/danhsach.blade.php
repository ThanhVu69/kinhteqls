<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Tài liệu</title>
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

    <!-- Light Gallery Plugin Css -->
    <link href="{{asset('/backend/plugins/light-gallery/css/lightgallery.css')}}" rel="stylesheet">
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
            <!-- Image Gallery -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Loại tài liệu
                            </h2>
                            <br>
                            <a class="btn btn-primary" href="{{asset('trang-quan-ly')}}" role="button">Bảng điều khiển</a>
                        </div>
                        <div class="body">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#create-cust">
                            Thêm loại tài liệu
                            </button>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr >
                                            <th>Tên</th>
                                            <th>Slug</th>
                                            <th style="width:110px">Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($loaitailieu as $item)
                                        <tr>
                                            <td><a href="{!! URL::route('admin.tailieu.loai',$item->id) !!}">{!! $item->ten !!}</a></td>
                                            <td>{!! $item->url !!}</td>
                                            <td>
                                                <a href="{!! URL::route('admin.loaitailieu.getEdit',$item->id) !!}" 
                                                onclick="return confirm('Bạn có chắc chắn muốn sửa?')" 
                                                class="btn btn-info btn-sm">Sửa</a>
                                                <a href="{!! URL::route('admin.loaitailieu.getDelete', $item->id ) !!}" 
                                                onclick="return confirm('Bạn có chắc chắn muốn xóa?')" 
                                                class="btn btn-danger btn-sm">Xóa</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
            @if(isset($loaitl))
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tài liệu
                                <small></small>
                                <a href="{!! URL::route('admin.tailieu.getAdd') !!}" class="btn btn-info left">Thêm tài liệu</a><br><br>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr >
                                            <th>{{$loaitl->ten}}</th>
                                            <th style="width:110px">Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($tailieu as $item)
                                        <tr>
                                            <td><a href="{{ asset('/upload/tailieu/'.$item->noidung) }}">{!! $item->noidung !!}</a></td>
                                            <td>
                                                <a href="{!! URL::route('admin.loaitailieu.getEdit',$item->id) !!}" 
                                                onclick="return confirm('Bạn có chắc chắn muốn sửa?')" 
                                                class="btn btn-info btn-sm">Sửa</a>
                                                <a href="{!! URL::route('admin.loaitailieu.getDelete', $item->id ) !!}" 
                                                onclick="return confirm('Bạn có chắc chắn muốn xóa?')" 
                                                class="btn btn-danger btn-sm">Xóa</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tài liệu
                                <small></small>
                                <a href="{!! URL::route('admin.tailieu.getAdd') !!}" class="btn btn-info left">Thêm tài liệu</a><br><br>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr >
                                            <th>Tài liệu</th>
                                            <th style="width:110px">Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($tailieu as $item)
                                        <tr>
                                            <td><a href="{{ asset('/upload/tailieu/'.$item->noidung) }}">{!! $item->noidung !!}</a></td>
                                            <td>
                                                <a href="{!! URL::route('admin.loaitailieu.getEdit',$item->id) !!}" 
                                                onclick="return confirm('Bạn có chắc chắn muốn sửa?')" 
                                                class="btn btn-info btn-sm">Sửa</a>
                                                <a href="{!! URL::route('admin.loaitailieu.getDelete', $item->id ) !!}" 
                                                onclick="return confirm('Bạn có chắc chắn muốn xóa?')" 
                                                class="btn btn-danger btn-sm">Xóa</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="row">
                <form action="{!! route('admin.loaitailieu.getAdd') !!}" method="POST"  enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                    <div class="modal fade" id="create-cust" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background: #06047d;">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel" style="color:#ffeb00">Thêm loại tài liệu</h4><br>
                                </div>
                                <div class="form-group" style="margin-top:15px">
                                    <label class="col-md-4"><b>Tên loại tài liệu</b></label>
                                    <div class="col-md-12">
                                        <input class="form-control"  type="text" name="txtLTLName" placeholder="Nhập tên" required/>
                                    </div>
                                    <div>
                                        {!! $errors->first('txtLTLName') !!}
                                    </div>  
                                </div>       
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary btn-sm btn-crnv"><i
                                            class="fa fa-check"></i>Lưu
                                    </button>
                                    <button type="button" class="btn btn-default btn-sm btn-close" data-dismiss="modal"><i
                                            class="fa fa-undo"></i> Bỏ qua
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>                                                                  
                </form>
            </div>
            
        </div>  

    </section>

    <!-- Jquery Core Js -->
    <script src="{{asset('/backend/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('/backend/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('/backend/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('/backend/plugins/node-waves/waves.js')}}"></script>

     <!-- Light Gallery Plugin Js -->
     <script src="{{asset('/backend/plugins/light-gallery/js/lightgallery-all.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('/backend/js/admin.js')}}"></script>
    <script src="{{asset('/backend/js/pages/medias/image-gallery.js')}}"></script>
    <script src="{{asset('/backend/js/pages/forms/editors.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{asset('/backend/js/demo.js')}}"></script>
</body>

</html>