<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Mô hình đào tạo</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('trangcon/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
	<link href="{{asset('trangcon/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('trangcon/css/nav.css')}}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>
@include('frontend.header')
    <div class="container-fluid">
        <div class="col-sm-1">
        </div>
        <!-- Center Column -->
        <div class="col-sm-8">
            <!-- Articles -->
            <div class="row">
                <article class="col-xs-12">
                    <h2 style="text-align: center;">Mô hình đào tạo</h2>
                    <p style="text-align: right;">@foreach($mohinh as $mh)
                    {!! $mh->noidung !!}
                    @endforeach</p>
                </article>
            </div>
            <hr>
        </div>
        <!--/Center Column-->
        <!-- Right Column -->
<div class="col-sm-3">

<!-- Form -->
<!-- List-Group Panel -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="panel-title"><span class="glyphicon glyphicon-random"></span> Danh mục</h1>
    </div>
    <div class="list-group">
        <a href="{{asset('mo-hinh-dao-tao')}}" class="list-group-item">Mô hình đào tạo</a>
        <a href="{{asset('gioi-thieu-chung1')}}" class="list-group-item">Đào tạo đại học</a>
        <a href="{{asset('gioi-thieu-chung1')}}" class="list-group-item">Đào tạo sau đại học</a>
        <!-- <a href="#" class="list-group-item">Premier Niche Markets</a>
        <a href="#" class="list-group-item">Dynamically Innovate</a>
        <a href="#" class="list-group-item">Objectively Innovate</a>
        <a href="#" class="list-group-item">Proactively Envisioned</a> -->
    </div>
</div>
</div>
<!--/Right Column -->

    </div>
    <!--/container-fluid-->
    @include('frontend.footer')
   


    <!-- jQuery -->
    <script src="{{asset('trangcon/js/jquery-1.11.3.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('trangcon/js/bootstrap.min.js')}}"></script>

    <!-- IE10 viewport bug workaround -->
    <script src="{{asset('trangcon/js/ie10-viewport-bug-workaround.js')}}"></script>

    <!-- Placeholder Images -->
    <script src="{{asset('trangcon/js/holder.min.js')}}"></script>
<script>
    jQuery(document).on('click', '.mega-dropdown', function(e) {
  e.stopPropagation()
})
</script>
</body>

</html>