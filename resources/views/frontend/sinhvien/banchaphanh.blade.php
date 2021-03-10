<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ban chấp hành LCĐ-LCH</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('trangphu/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('trangphu/css/blog-post.css')}}" rel="stylesheet">
    <!-- Căn giữa ảnh đầu trang -->
    <link href="{{asset('trangphu/css/anh.css')}}" rel="stylesheet">

</head>

<body>
    @include('frontend.header')
    <!-- Page Content -->
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="width:auto; height:auto;" src="{{asset('index/assets/img/dai-hoc-bach-khoa.jpg')}}"
                        class="d-block w-1" alt="...">
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Post Content Column -->
            <div class="col-lg-8">
                <!-- Title -->
                <!-- <h5 class="mt-4" style="color: #9c1010;">CHUẨN ĐẦU RA</h5>
                <hr> -->
                <div style="font-size: 13px;">
                    <p style="text-align: right;">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>Họ và tên</th>
                                    <th>MSSV</th>
                                    <th>Lớp</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Chức vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($banchaphanh as $item)
                                <tr>
                                    <td>{{ $item->hoten }}</td>
                                    <td>{{ $item->masosv }}</td>
                                    <td>{{ $item->lop }}</td>
                                    <td>{{ $item->sdt }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->chucvu }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </p><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <hr>
    <!-- Footer -->
    @include('frontend.footer')
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('trangphu/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('trangphu/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>