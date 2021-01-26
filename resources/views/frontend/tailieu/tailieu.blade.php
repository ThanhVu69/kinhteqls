<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tài liệu</title>
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
                <h5 class="mt-4" style="color: #9c1010;margin-left: 50px;">TÀI LIỆU</h5>
            </div>
            <div style=" border-top: 3px groove #003366;">
                <br><br>
                <div class="cardz">
                    <div class="row ">
                        <div class="col-md-8">
                        <div class="card-body">
                        @if(isset($loaitailieu))
                        <p class="card-text" style="font-size: 15px; color:#000;"><b>{{$loaitailieu->ten}}</b></p>
                        @else
                        <p class="card-text" style="font-size: 15px; color:#000;"><b>TÀI LIỆU</b></p>
                        @endif
                                <hr style=" border-top: 3px groove #003366;">
                            @foreach($tailieu as $tl)
                            <h6 ><a href="{{ asset('/upload/tailieu/'.$tl->noidung) }}" style="color: #080d94;">{!! $tl->noidung !!}</a></h6>
                            @endforeach
                            @include('frontend.inclu.tailieu')
                            </div>
                            
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <p class="card-text" style="font-size: 15px; color:#000;"><b>TÀI LIỆU</b></p>
                                <hr style=" border-top: 3px groove #003366;">
                                @foreach($loai as $item)
                                <a href="{{asset('/tai-lieu/'.$item->url)}}">
                                    <p class="card-text" style="font-size: 13px; color:#003366;">{!! $item->ten !!}</p>
                                </a>
                                <hr>
                                @endforeach

                                <hr style=" groove #919191; border-top: 3px groove #003366;">
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