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
                <h5 style="color: #9c1010;" class="mt-4">CÁN BỘ - GIẢNG VIÊN</h5>
                <h6>Bộ môn {{$bomon->tenbomon}}</h6>
                <hr>
                <div style="font-size: 13px;">
                    <table class="table table-striped">
                        <thead>
                        </thead>
                        <tbody>
                            @foreach($giangvien as $gv)
                            <tr>
                                <td>
                                    <img style="widt: auto; height:150px" src="/upload/giangvien/{{$gv->anh}}">
                                </td>
                                <td><a href="{{asset('chi-tiet-giang-vien')}}/{{$gv->id}}">{{$gv->hoten}}</a><br><br>
                                    Chức vụ: {{$gv->chucvu}}<br><br>
                                    Email: {{$gv->email}}
                                </td>
                            </tr>
                            @endforeach
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