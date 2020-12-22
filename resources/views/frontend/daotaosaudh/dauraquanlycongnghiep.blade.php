<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Chuẩn đầu ra của Chương trình tiến sỹ Quản lý công nghiệp</title>

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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
        integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>

    <!-- Navbar right -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
                    <h2 style="text-align: center;">Chuẩn đầu ra của Chương trình tiến sỹ Quản lý công nghiệp</h2>
                    <p style="text-align: right;">@foreach($daotaotiensy as $mh)
                        {!! $mh->dauraquanlycongnghiep !!}<br><br><br><br><br><br><br><br>
                        @endforeach</p>
                </article>
            </div>
            <hr>
        </div>
        <!-- Right Column -->
        <div class="col-sm-3">
            <!-- List-Group Panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title"><span class="glyphicon glyphicon-random"></span> Danh mục</h1>
                </div>
                <div class="list-group">
                    <a href="{{asset('dao-tao-sau-dai-hoc')}}" class="list-group-item">Đào tạo sau đại học</a>
                    <a href="{{asset('danh-sach-luan-van')}}" class="list-group-item">Danh sách luận văn cao học các
                        khóa</a>
                    <a href="{{asset('danh-sach-nghien-cuu-sinh')}}" class="list-group-item">Danh sách Nghiên cứu sinh
                        và Đề
                        tài nghiên cứu</a>
                    <a href="{{asset('danh-sach-tap-chi')}}" class="list-group-item">Danh sách tạp chí/ Hội nghị khoa
                        học</a>
                    <!-- <a href="#" class="list-group-item">Premier Niche Markets</a>
        <a href="#" class="list-group-item">Dynamically Innovate</a>
        <a href="#" class="list-group-item">Objectively Innovate</a>
        <a href="#" class="list-group-item">Proactively Envisioned</a> -->
                </div>
                <div class="dropdown">
                    <a class="list-group-item" data-toggle="dropdown" data-target="#" href="#">
                        Đào tạo thạc sỹ <span class="caret"></span>
                    </a>
                    <ul style="background-color: #e5e5e5" class="dropdown-menu multi-level" role="menu"
                        aria-labelledby="dropdownMenu">
                        <li><a href="{{asset('dao-tao-thac-sy')}}">Giới thiệu chung</a></li>
                        <li><a href="{{asset('chuan-dau-ra')}}">Chuẩn đầu ra của chương trình</a></li>
                        <li><a href="{{asset('doi-tuong')}}">Đối tượng tuyển sinh</a></li>
                        <li><a href="{{asset('cau-truc')}}">Cấu trúc của chương trình đào tạo</a></li>
                        <li><a href="{{asset('chuong-trinh-chuyen-doi')}}">Chương trình chuyển đổi</a></li>
                        <li><a href="{{asset('danh-muc-hoc-phan')}}">Danh mục học phần</a></li>
                        <li><a href="{{asset('danh-sach-giang-vien')}}">Danh sách giảng viên</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="list-group-item" data-toggle="dropdown" data-target="#" href="#">
                        Đào tạo tiến sỹ <span class="caret"></span>
                    </a>
                    <ul style="background-color: #e5e5e5" class="dropdown-menu multi-level" role="menu"
                        aria-labelledby="dropdownMenu">
                        <li><a href="{{asset('dao-tao-tien-sy')}}">Giới thiệu chung</a></li>
                        <li><a href="{{asset('kinh-te-hoc')}}">Chương trình tiến sỹ Kinh tế học</a></li>
                        <li><a href="{{asset('dau-ra-kinh-te-hoc')}}">Chuẩn đầu ra của Chương trình tiến sỹ Kinh tế học</a></li>
                        <li><a href="{{asset('quan-ly-cong-nghiep')}}">Chương trình tiến sỹ Quản lý công nghiệp</a></li>
                        <li><a href="{{asset('dau-ra-quan-ly-cong-nghiep')}}">Chuẩn đầu ra của Chương trình tiến sỹ Quản lý công nghiệp</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/Right Column -->


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