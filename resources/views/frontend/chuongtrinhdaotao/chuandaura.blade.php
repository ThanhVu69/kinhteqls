<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chương trình đào tạo</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('trangphu/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('trangphu/css/blog-post.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('index/css/accordion.css')}}" rel="stylesheet"> -->
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
                <!-- <div class="title"> -->
                <!-- <h5 class="mt-4" style="color: #9c1010;">{{ $chuandaura->tenchuongtrinh }}</h5> -->
                <!-- <small>{{ $chuandaura->tenchuongtrinh }}</small> -->
                <!-- </div>
                <hr style=" groove #919191; border-top: 1px groove #003366;"> -->
                <div>
                    <p>
                        {!! $chuandaura->chuandaura !!}
                        Xem kế hoạch học tập chuẩn <a style="color: #007bff;"
                            href="{!! $chuandaura->danhmucchuongtrinh !!}">tại đây</a>
                    </p>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="row">
                            <!-- Post Content Column -->
                            <div class="col-xs-3 col-sm-3">
                                <!-- Button trigger modal -->
                                <button type="button" style="color: black;"class="btn btn-primary" data-toggle="modal" data-target="#giaoducdaicuong">
                                Giáo dục đại cương
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="giaoducdaicuong" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-centereds">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Giáo dục đại cương {!! $chuandaura->tenchuongtrinh !!}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        {!! $chuandaura->daicuong !!} 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                            <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <!-- Button trigger modal -->
                                <button type="button" style="color: black;"class="btn btn-primary" data-toggle="modal" data-target="#cosonganh">
                                Cơ sở ngành
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="cosonganh" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-centereds">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Cơ sở ngành {!! $chuandaura->tenchuongtrinh !!}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        {!! $chuandaura->cosonganh !!}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                            <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <!-- Button trigger modal -->
                                <button type="button" style="color: black;"class="btn btn-primary" data-toggle="modal" data-target="#bosung">
                                Kiến thức bổ sung
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="bosung" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-centereds">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Kiến thức bổ sung {!! $chuandaura->tenchuongtrinh !!}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        {!! $chuandaura->kienthucbosung !!}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                            <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <!-- Button trigger modal -->
                                <button type="button" style="color: black;"class="btn btn-primary" data-toggle="modal" data-target="#tudo">
                                Học phần tự chọn
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="tudo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-centereds">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Học phần tự chọn {!! $chuandaura->tenchuongtrinh !!}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        {!! $chuandaura->tuchon !!}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                            <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br><br><br><br><br><br>
                </div>
            @include('frontend.chuongtrinhdaotao.slidebarchuongtrinhdaotao')
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