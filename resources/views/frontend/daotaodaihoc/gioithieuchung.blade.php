<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Giới thiệu chung</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('trangphu/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('trangphu/css/blog-post.css')}}" rel="stylesheet">
    <link href="{{asset('index/css/daotao.css')}}" rel="stylesheet">
</head>

<body style="background-color:#f8f8f8">
    @include('frontend.header')<br><br><br><br><br>
    
    <section class="page-section" id="tailieu">
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
                            <img src="{{asset('index/assets/img/-1600159227042208144611.jpg')}}">
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <p class="card-text" style="font-size: 13px; color:#000;"><b>ĐÀO TẠO ĐẠI HỌC</b></p>
                                <hr style=" border-top: 3px groove #003366;">
                                @foreach($daotaodaihoc as $dt)
                                <a href="{{$dt->bieudokehoach}}">
                                    <p class="card-text" style="font-size: 13px; color:#003366;">Biểu đồ kế hoạch</p>
                                </a>
                                @endforeach
                                <hr>
                                <a href="{{asset('gioi-thieu-chung1')}}">
                                    <p class="card-text" style="font-size: 13px; color:#003366;">Giới thiệu chung</p>
                                </a>
                                <hr style=" groove #919191; border-top: 3px groove #003366;">
                                <p class="card-text" style="font-size: 13px; color:#000;"><b>CÁC CHƯƠNG TRÌNH ĐÀO
                                        TẠO</b></p>
                                @foreach($chuongtrinhdaotao as $ct)
                                <div class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" style="font-size: 13px; color:#003366;">
    
                                            {{$ct->tenchuongtrinh}}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a style="color: #000" class="dropdown-item"
                                            href="{{asset('chuan-dau-ra')}}/{{$ct->id}}">Chuẩn
                                            đầu ra</a>
                                        <a style="color: #000" class="dropdown-item"
                                            href="{{asset('quy-dinh-dao-tao')}}/{{$ct->id}}">Quy định đào tạo</a>
                                        <a style="color: #000" class="dropdown-item"
                                            href="{{$ct->danhmucchuongtrinh}}">Danh mục chương
                                            trình</a>
                                    </div>
                                </div>
                                @endforeach
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