
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Đào tạo thạc sỹ</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('/backend/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('/backend/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('/backend/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <!-- <link href="{{asset('/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet"> -->

    <!-- Custom Css -->
    <link href="{{asset('/backend/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('/backend/css/themes/all-themes.css')}}" rel="stylesheet" />
</head>

<body class="theme-red">
@include('backend.header')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Đào tạo Thạc sỹ
                            </h2>
                            <br>
                            <a class="btn btn-primary" href="{{asset('trang-quan-ly')}}" role="button">Bảng điều khiển</a>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Giới thiệu chung</th>
                                            <th>Chuẩn đầu ra</th>
                                            <th>Đối tượng</th>
                                            <th>Cấu trúc</th>
                                            <th>Chương trình chuyển đổi</th>
                                            <th>Danh mục học phần</th>
                                            <th>Danh sách giảng viên</th>
                                            <th>Cập nhật ngày</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($daotaothacsy as $hh)
                                        <tr>
                                            <td>{!! $hh->gioithieuchung !!}</td>
                                            <td>{!! $hh->chuandaura !!}</td>
                                            <td>{!! $hh->doituong !!}</td>
                                            <td>{!! $hh->cautruc !!}</td>
                                            <td>{!! $hh->chuongtrinhchuyendoi !!}</td>
                                            <td>{!! $hh->danhmuchocphan !!}</td>
                                            <td>{!! $hh->danhsachgiangvien !!}</td>
                                            <td>{!! $hh->updated_at !!}</td>
                                            <td><a href="suadaotaothacsy/{{$hh->id}}" onclick="return confirm('Bạn có chắc chắn muốn sửa?')" class="btn btn-info btn-sm">Sửa</a></td>
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

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{asset('/backend/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('/backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('/backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('/backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('/backend/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('/backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('/backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('/backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('/backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('/backend/js/admin.js')}}"></script>
    <!-- <script src="{{asset('/backend/js/pages/tables/jquery-datatable.js')}}"></script> -->

    <!-- Demo Js -->
    <script src="{{asset('/backend/js/demo.js')}}"></script>
</body>

</html>
