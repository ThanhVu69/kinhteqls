<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Các học phần đảm nhận</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('trangphu/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('trangphu/css/blog-post.css')}}" rel="stylesheet">
    <link href="{{asset('index/css/accordion.css')}}" rel="stylesheet">
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
            <ul class="a-container">
                <!-- item01 -->
                @foreach($hihi as $item)
                <li class="a-items">
                    <input type="radio" name="ac" id="{{$item->id}}" />
                    <label for="{{$item->id}}">{!! $item->tenhocphan !!}</label>
                    <div class="a-content">
                        <h2>{!! $item->tenhocphan !!}</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam beatae maiores possimus sequi
                            non quidem ad necessitatibus fugiat consectetur veritatis laboriosam ut soluta quis deleniti
                            deserunt! Voluptate qui excepturi architecto.</p>
                    </div>
                </li>
                @endforeach
            </ul>
            <!-- Post Content Column -->
            <div class="col-lg-8">
                <!-- Title -->
                <h5 class="mt-4" style="color: #9c1010;">CÁC HỌC PHẦN ĐẢM NHẬN</h5>
                <small>{{ $hocphandamnhan->tenbomon }}</small>
                <hr>
                <div style="font-size: 13px;">
                    <p style="text-align: right;">
                        {!! $hocphandamnhan->hocphandamnhan !!}<br><br><br><br><br><br><br><br>
                    </p>
                </div>
            </div>
            @include('frontend.bomon.slidebarbomon')
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