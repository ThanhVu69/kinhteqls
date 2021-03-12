<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lịch sử hình thành và phát triển</title>
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
                <img style="width:1500px; height:auto;" src="{{asset('index/assets/img/caybang2.jpg')}}"
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
                <div class="title">
                LỊCH SỬ HÌNH THÀNH VÀ PHÁT TRIỂN
                </div>
                <hr style=" groove #919191; border-top: 1px groove #003366;">
                <div style="font-size: 13px;">
                    <p style="text-align: right;">
                        @foreach($gioithieu as $gt)
                        {!! $gt->lichsu !!}
                        @endforeach<br><br><br><br><br><br><br><br>
                    </p>
                </div>
            </div>
            @include('frontend.gioithieu.slidebargioithieu')
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