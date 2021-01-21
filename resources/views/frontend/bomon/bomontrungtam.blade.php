<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bộ môn trung tâm</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('trangphu/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('trangphu/css/blog-post.css')}}" rel="stylesheet">
    <link href="{{asset('index/css/daotao.css')}}" rel="stylesheet">
</head>

<body style="background-color:#f8f8f8">
    @include('frontend.header')
    <br><br><br><br>
    <!-- <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="width:auto; height:auto;" src="{{asset('index/assets/img/dai-hoc-bach-khoa.jpg')}}"
                        class="d-block w-1" alt="...">
                </div>
            </div>
        </div><br><br><br><br><br><br>
        <div class="row">
            <div class="col-lg-8">
                <h5 class="mt-4" style="color: #9c1010;">BỘ MÔN TRUNG TÂM</h5>
                <hr>
                <div style="font-size: 13px;">
                <p style="text-align: right;">
                @foreach($bomontrungtam as $mh)
                    {!! $mh->gioithieuchung !!}
                    @endforeach
                    </p>
                <br><br><br><br><br>
            </div>
            </div>
            //chỗ này là slidebar
        </div>
    </div> -->
    <section class="page-section">
        <br><br>
        <div>
            <div class="col-lg-12">
                <h5 class="mt-4" style="color: #9c1010;">GIỚI THIỆU CHUNG</h5>
            </div>
            <div style=" border-top: 3px groove #003366;">
                <br><br>
                <div class="cardz">
                    <div class="row ">
                        <div class="col-md-8">
                            <img src="{{asset('index/assets/img/newsimages_small_dissertation_260215.jpg')}}">
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <p class="card-text" style="font-size: 13px; color:#000;"><b>BỘ MÔN TRUNG TÂM</b></p>
                                <hr style=" border-top: 3px groove #003366;">
                                <a href="{{asset('bo-mon-trung-tam')}}">
                                    <p class="card-text" style="font-size: 13px; color:#003366;">Giới thiệu chung</p>
                                </a>
                                <hr style=" groove #919191; border-top: 3px groove #003366;">
                                <p class="card-text" style="font-size: 13px; color:#000;"><b>CÁC CHƯƠNG TRÌNH ĐÀO
                                        TẠO</b></p>
                                @foreach($bomon as $ct)
                                <div class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" style="font-size: 13px; color:#003366;">

                                        {{$ct->tenbomon}}
                                    </a>
                                    <div class="dropdown-menu" style="font-size: 13px;"
                                        aria-labelledby="navbarDropdownMenuLink">
                                        <a style="color: #000" class="dropdown-item"
                                            href="{{asset('gioi-thieu-chung4')}}/{{$ct->id}}">Giới
                                            thiệu chung</a>
                                        <a style="color: #000" class="dropdown-item"
                                            href="{{asset('can-bo-giang-vien')}}/{{$ct->id}}">Cán bộ và
                                            giảng viên</a>
                                        <a style="color: #000" class="dropdown-item"
                                            href="{{asset('huong-nghien-cuu')}}/{{$ct->id}}">Các hướng
                                            nghiên cứu</a>
                                        <a style="color: #000" class="dropdown-item"
                                            href="{{asset('cong-trinh-khoa-hoc')}}/{{$ct->id}}">Các
                                            công trình khoa
                                            học</a></li>
                                        <a style="color: #000" class="dropdown-item"
                                            href="{{asset('hoc-phan-dam-nhan')}}/{{$ct->id}}">Các học
                                            phần đảm nhận</a>
                                        <a style="color: #000" class="dropdown-item"
                                            href="{{asset('co-so-vat-chat')}}/{{$ct->id}}">Cơ
                                            sở vật
                                            chất</a>
                                        <a style="color: #000" class="dropdown-item"
                                            href="{{asset('sach-da-xuat-ban')}}/{{$ct->id}}">Sách đã
                                            xuất bản</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr><br><br><br><br><br>
    <!-- Footer -->
    @include('frontend.footer')
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('trangphu/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('trangphu/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>