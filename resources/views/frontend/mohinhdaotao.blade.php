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
</head>

<body style="background-color:#f8f8f8">
    @include('frontend.header')
    <!-- Page Content -->
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            
        </div><br><br><br><br><br><br><br>
        <div class="row">
            <!-- Post Content Column -->
            <div class="col-lg-8">
                <!-- Title -->
                <h5 class="mt-4" style="color: #9c1010;">MÔ HÌNH ĐÀO TẠO</h5>
                <hr>

                <div class="container-fluid">
                    <div style="font-size: 13px;">
                        <p style="text-align: right;">@foreach($mohinh as $mh)
                            {!! $mh->noidung !!}
                            @endforeach</p>
                        <br><br><br><br><br>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
            </div>
            <!-- Sidebar Widgets Column -->
            <div class="col-md-3">
                <!-- Categories Widget -->
                <div class="card my-3">
                    <div class="card" style="width: 20rem;">
                        <div class="card-header">
                            <b>DANH MỤC</b>
                        </div>
                        <ul class="list-group list-group-flush" style=" border-top: 3px groove #003366;">
                            <li class="list-group-item"><a style="color: #000" href="{{asset('mo-hinh-dao-tao')}}">Mô
                                    hình đào tạo</a></li>
                            <li class="list-group-item"><a style="color: #000" href="{{asset('gioi-thieu-chung1')}}">Đào
                                    tạo đại học</a></li>
                            <li class="list-group-item"><a style="color: #000" href="{{asset('gioi-thieu-chung1')}}">Đào
                                    tạo sau đại học</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>

</body>

</html>