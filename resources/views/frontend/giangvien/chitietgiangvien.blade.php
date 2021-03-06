<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cán bộ - Giảng viên</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('trangphu/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('trangphu/css/blog-post.css')}}" rel="stylesheet">
    <!-- Căn giữa ảnh đầu trang -->
    <link href="{{asset('trangphu/css/anh.css')}}" rel="stylesheet">

</head>

<body class="body">
    @include('frontend.header')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img style="width:1500px; height:auto;" src="{{asset('index/assets/img/caybang1.jpg')}}"
                     class="cangiua" alt="...">
            </div>
        </div>
    </div><br><br><br>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- Post Content Column -->
            <div class="col-lg-8">
                <!-- Title -->
                <h5 style="color: #9c1010;" class="mt-4">CÁN BỘ - GIẢNG VIÊN</h5>
                <h6>Bộ môn {{$bomon->bomons->tenbomon}}</h6>
                <hr>
                <div style="font-size: 13px;">
                    <table class="table table-striped">
                        <thead>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img style="widt: auto; height:300px" src="/upload/giangvien/{{$giangvien->anh}}">
                                </td>
                                <td><b>{{$giangvien->hoten}}</b><br><br>
                                    <b>Địa chỉ làm việc:</b> {{$giangvien->diachilamviec}}<br><br>
                                    <b>Chức vụ:</b> {{$giangvien->chucvu}}<br><br>
                                    <b>Email:</b> {{$giangvien->email}}<br><br>
                                    <b>Số điện thoại:</b> {{$giangvien->sdt}}<br><br>
                                    <b>Website:</b> <a
                                        href="{{$giangvien->website}}">{{$giangvien->website}}</a><br><br>
                                    <b>Môn giảng dạy:</b> {{$giangvien->mongiangday}}
                                </td>
                            </tr>
                        </tbody>
                    </table><br><br><br><br><br><br><br><br>
                </div>
            </div>
            @include('frontend.giangvien.slidebargiangvien')
        </div>
        <!-- /.row -->
    </div>
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