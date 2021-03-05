<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mô hình đào tạo</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('trangphu/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('trangphu/css/blog-post.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Light Gallery Plugin Css -->
    <link href="{{asset('/backend/plugins/light-gallery/css/lightgallery.css')}}" rel="stylesheet">
</head>

<body style="background-color:#f8f8f8">
    @include('frontend.header')
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        </div><br><br><br><br><br><br><br>

        @if(isset($loai))
        <div class="row">
            <!-- Post Content Column -->
            <div class="col-lg-8">
                <!-- Title -->
                <h5 class="mt-4" style="color: #9c1010;">BỘ SƯU TẬP</h5>
                <hr>
                <div class="body">
                    <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                        @foreach($bosuutap as $lbst)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="{{ asset('/upload/bosuutap/'.$lbst->hinhanh) }}" data-sub-html="Demo Description">
                                <img class="img-responsive thumbnail"
                                    src="{{ asset('/upload/bosuutap/'.$lbst->hinhanh) }}">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Categories Widget -->
                <div class="card my-4">
                    <div class="card" style="width: 35rem;">
                        <div class="card-header">
                            <b>Danh mục</b>
                        </div>
                        <?php 
                            $loaibosuutap = DB::table('loaibosuutaps')->get();
                        ?>
                        <ul class="list-group list-group-flush">
                            @foreach($loaibosuutap as $lbst)
                            <li class="list-group-item"><a style="color: #000"
                                    href="{{asset('/bo-suu-tap/'.$lbst->url)}}">{!! $lbst->ten !!}</a></li>

                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Image Gallery -->
            @else
            <div class="row" style="margin-top:10px">
                <!-- Post Content Column -->
                <div class="col-lg-8">
                    <!-- Title -->
                    <h4 class="mt-4" style="color: #9c1010;">BỘ SƯU TẬP</h4>
                    <hr>
                    <div class="body">
                        <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                            @foreach($bosuutap as $img)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="{{ asset('/upload/bosuutap/'.$img->hinhanh) }}"
                                    data-sub-html="Demo Description">
                                    <img class="img-responsive thumbnail"
                                        src="{{ asset('/upload/bosuutap/'.$img->hinhanh) }}">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Categories Widget -->
                    <div class="card my-4">
                        <div class="card" style="width: 35rem;">
                            <div class="card-header" style="background-color: #003a6a; color: #fff">
                                <h4>Danh mục<h4>
                            </div>
                            <?php 
                            $loaibosuutap = DB::table('loaibosuutaps')->get();
                            ?>
                            <ul class="list-group list-group-flush">
                                @foreach($loaibosuutap as $lbst)
                                <li class="list-group-item"><a style="color: #000"
                                        href="{{asset('/bo-suu-tap/'.$lbst->url)}}">{!! $lbst->ten !!}</a></li>

                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    @include('frontend.footer')
    
    <!-- Jquery Core Js -->
    <script src="{{asset('/backend/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Light Gallery Plugin Js -->
    <script src="{{asset('/backend/plugins/light-gallery/js/lightgallery-all.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('/backend/js/pages/medias/image-gallery.js')}}"></script>
</body>

</html>