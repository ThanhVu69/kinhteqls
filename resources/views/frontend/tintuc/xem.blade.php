<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tin tức - Sự kiện</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('trangphu/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('trangphu/css/blog-post.css')}}" rel="stylesheet">
    <link href="{{asset('/index/css/tintuc.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- Căn giữa ảnh đầu trang -->
    <link href="{{asset('trangphu/css/anh.css')}}" rel="stylesheet">
</head>

<body style="background-color:#f8f8f8">
    @include('frontend.header')
    <!-- Page Content -->
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!-- <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="width:auto; height:auto;" src="{{asset('index/assets/img/dai-hoc-bach-khoa.jpg')}}"
                        class="d-block w-1" alt="...">
                </div>
            </div> -->
        </div><br><br><br><br><br>
        <div class="row">
            <!-- Post Content Column -->
            @if(isset($tintuc))
            <div class="col-lg-8">
                <!-- Title -->
                <h5 class="mt-4" style="color: #9c1010;">TIN TỨC</h5>
                <hr>

                <div class="row clearfix">    
                    @foreach($tintuc as $tt)
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="c">
                            <div class="c-img"></div>
                            <a href="{!! URL::to('tin-tuc-su-kien/'.$tt->url) !!}" class="c-link">
                                <div class="c-img-hovered" style="background-image:url('{{ asset('/upload/tintuc/'.$tt->hinhanh) }}')" title="Xem chi tiết">
                                </div>
                            </a>
                            <div class="c-info">
                                <div class="c-about">
                                    <a class="c-tag tag-news">News</a>
                                    <div class="c-time">{!! date('d-m-Y',strtotime($tt->ngay)) !!}</div>
                                </div>
                                <h1 class="c-title">{!! ($tt->tieude) !!}</h1>
                                <!-- <div class="c-creator">by <a href="">Tyler Platt</a></div> -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @include('frontend.inclu.phantrang')
            </div>
            @endif
            @if(isset($sukien))
            <div class="col-lg-8">
                <!-- Title -->
                <h5 class="mt-4" style="color: #9c1010;">SỰ KIỆN</h5>
                <hr>

                <div class="row clearfix">    
                    @foreach($sukien as $sk)
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="c">
                            <div class="c-img"></div>
                            <a href="{!! URL::to('tin-tuc-su-kien/'.$sk->url) !!}" class="c-link">
                                <div class="c-img-hovered" style="background-image:url('{{ asset('/upload/tintuc/'.$sk->hinhanh) }}')" title="Xem chi tiết">
                                </div>
                            </a>
                            <div class="c-info">
                                <div class="c-about">
                                    <a class="c-tag tag-events">EVENTS</a>
                                    <div class="c-time">{!! date('d-m-Y',strtotime($sk->ngay)) !!}</div>
                                </div>
                                <h1 class="c-title">{!! ($sk->tieude) !!}</h1>
                                <!-- <div class="c-creator">by <a href="">Tyler Platt</a></div> -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @include('frontend.inclu.phantrang')
            </div>
            @endif
            <!-- Sidebar Widgets Column -->
            <div class="col-md-1">
            </div>
            <div class="col-md-3">
                <!-- Categories Widget -->
                <div class="card my-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            <b>DANH MỤC</b>
                        </div>
                        <ul class="list-group list-group-flush" style=" border-top: 3px groove #003366;">
                            <li class="list-group-item"><a style="color: #000" href="{{asset('tin-tuc')}}">Tin tức</a></li>
                            <li class="list-group-item"><a style="color: #000" href="{{asset('su-kien')}}">Sự kiện</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <hr><br><br><br><br><br><br>
    <!-- Footer -->
    @include('frontend.footer')
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('trangphu/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('trangphu/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    
</body>

</html>