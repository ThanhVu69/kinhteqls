<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Viện Kinh tế và Quản lý</title>
    <link rel="icon" type="image/x-icon" href="{{asset('index/assets/img/logo_sem.png')}}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('/index/css/styles.css')}}" rel="stylesheet" />
    <link href="{{asset('/index/css/s.css')}}" rel="stylesheet" />
    <link href="{{asset('/index/css/bomon.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <!-- Card -->
    <link rel="stylesheet" href="{{asset('card/css/estilos.css')}}">
</head>

<body id="page-top">
    @include('sweetalert::alert')
    <!-- Modal Đăng nhập-->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Đăng nhập</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- form -->
                <form action="{{ action('AdminController@login') }}" method="post">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mật khẩu</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                                placeholder="Your password">
                        </div>
                        <button type="submit" class="btn btn-primary">Đăng nhập</button>
                </form>
                <!-- end form -->
            </div>
        </div>
    </div>
    </div>
    <!-- End Modal Đăng nhập -->
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #9c1010;">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img
                    src="{{asset('/index/assets/img/logo_sem.PNG')}}" style="width:auto; height: 70px" alt="" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto" style="font-weight: 800;">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#daotao">Đào tạo</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#gioithieuchung">Giới thiệu
                            chung</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#nghiencuuhoptac">Nghiên cứu - Hợp
                            tác</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#bomon">Bộ môn - Trung tâm</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#sinhvien">Học viên -Sinh viên</a>
                    </li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#tintuc">Tin tức - Sự kiện</a>
                    </li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#tailieu">Tài liệu</a>
                    </li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Thư viện số</a>
                    </li>
                    @if(Auth::check())
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="trang-quan-ly">Bảng điều khiển</a>
                    </li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#dangxuat">Đăng xuất</a>
                    </li>
                    @else
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#dangnhap">Đăng nhập</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <br><br> <br>
    <!-- Slider-->
    @include('frontend.slider')
    <!-- Đào tạo -->
    @include('frontend.daotao')
    <!-- Giới thiệu chung-->
    <section class="page-section bg-light" id="gioithieuchung">
        <div class="container-fluid" style="background-color: #fcf9e2">
            <div class="text-center">
                <br><br>
                <h2 class="section-heading text-uppercase">Giới thiệu chung</h2>
                <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                            <img class="img-fluid" style="width: 250px; height: 150px;"
                                src="{{asset('/index/assets/img/bk5.jpg')}}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading" style="text-align:center">Thư ngỏ</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                            <img class="img-fluid" style="width: 250px; height: 150px;"
                                src="{{asset('/index/assets/img/bk10.jpg')}}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading" style="text-align:center">Lịch sử hình thành và
                                phát
                                triển</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                            <img class="img-fluid" style="width: 250px; height: 150px;"
                                src="{{asset('/index/assets/img/bk11.jpg')}}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading" style="text-align:center">Cơ cấu tổ chức</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                            <img class="img-fluid" style="width: 250px; height: 150px;"
                                src="{{asset('/index/assets/img/bk12.jpg')}}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading" style="text-align:center">Cán bộ và giảng viên
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                            <img class="img-fluid" style="width: 250px; height: 150px;"
                                src="{{asset('/index/assets/img/bk13.png')}}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading" style="text-align:center">Cơ sở vật chất</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                            <img class="img-fluid" style="width: 250px; height: 150px;"
                                src="{{asset('/index/assets/img/bk7.jpeg')}}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading" style="text-align:center">Thông tin liên hệ
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Giới thiệu chung Modal-->
    <!-- Thư ngỏ-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><i class="fas fa-times mr-1" alt="Close modal"></i>
                </div>
                <div class="container"
                    style="background-image: url('index/assets/img/nen1.jpg'); background-size: cover;">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h3 class="text-uppercase" style="color: #fff">Thư ngỏ</h3><br>
                                <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> -->
                                <div style="text-align: left; color: #fff">
                                    @foreach($gioithieu as $gt)
                                    {!! $gt->thungo !!}
                                    @endforeach
                                </div>

                                <button class="btn btn-primary btn-sm" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Lịch sử hình thành và phát triển-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><i class="fas fa-times mr-1" alt="Close modal"></i>
                </div>
                <div class="container"
                    style="background-image: url('index/assets/img/nen3.jpg'); background-size: cover;">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h3 class="text-uppercase" style="color:#fff">Lịch sử hình thành và phát triển</h3><br>
                                <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> -->
                                <div style="text-align: left; color:#fff">
                                    @foreach($gioithieu as $gt)
                                    {!! $gt->lichsu !!}
                                    @endforeach

                                </div>
                                <button class="btn btn-primary btn-sm" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cơ cấu tổ chức-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><i class="fas fa-times mr-1" alt="Close modal"></i>
                </div>
                <div class="container"
                    style="background-image: url('index/assets/img/nen4.jpg'); background-size: cover;">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h3 class="text-uppercase" style="color:#fff">Cơ cấu tổ chức</h3><br>
                                <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> -->
                                <div style="text-align: left; color:#fff">
                                    @foreach($gioithieu as $gt)
                                    {!! $gt->cocau !!}
                                    @endforeach
                                </div>
                            </div>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times mr-1"></i>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Cán bộ và giảng viên-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><i class="fas fa-times mr-1" alt="Close modal"></i>
                </div>
                <div class="container"
                    style="background-image: url('index/assets/img/nen1.jpg'); background-size: cover;">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h3 class="text-uppercase" style="color:#fff">Cán bộ và giảng viên</h3>
                                @foreach ($canbo as $cb)
                                <ul class="list-inline" style=" text-align: left; color: #fff">
                                    {!! $cb->canbogiangvien !!}
                                </ul>
                                @endforeach
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cơ sở vật chất-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><i class="fas fa-times mr-1" alt="Close modal"></i>
                </div>
                <div class="container"
                    style="background-image: url('index/assets/img/nen3.jpg'); background-size: cover;">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h3 class="text-uppercase" style="color:#fff">Cơ sở vật chất</h3>
                                <div style="text-align: left; color:#fff">
                                    @foreach($gioithieu as $gt)
                                    {!! $gt->cosovatchat !!}
                                    @endforeach

                                </div>

                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Thông tin liên hệ-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><i class="fas fa-times mr-1" alt="Close modal"></i>
                </div>
                <div class="container"
                    style="background-image: url('index/assets/img/nen4.jpg'); background-size: cover;">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <div style="text-align: left;">
                                    <h3 class="text-uppercase" style="color:#fff">Thông tin liên hệ</h3>
                                    <div style="text-align: left; color:#fff">
                                        @foreach($gioithieu as $gt)
                                        {!! $gt->thongtin !!}
                                        @endforeach
                                    </div>
                                </div>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Nghiên cứu - Hợp tác -->
    @include('frontend.nghiencuu')

    <!-- Bộ môn - Trung tâm-->
    <section class="page-section bg-light" id="bomon">
        <br><br><br>
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Bộ môn - Trung tâm</h2>
                <h3 class="section-subheading text-muted">Viện Kinh tế và Quản lý hiện có 66 cán bộ giảng dạy và 6 cán
                    bộ phục vụ giảng dạy,
                    là những người hết lòng với công việc và có chuyên môn vững vàng trong các lĩnh vực tài chính,
                    kinh tế năng lượng, kinh tế học, kế toán, quản trị sản xuất và marketing.<br><br>
                    <span><a href="{{asset('bo-mon-trung-tam')}}" style="color: #be0f0f;">Xem chi tiết</a>
                </h3></span>
            </div>
            <div class="card-deck">
                @foreach ($bomon as $bm)
                <div class="col-sm-3">
                    <div class="card">
                        <img class="card-img-top" src="upload/bomon/{{$bm->anh}}"
                            style="width: auto; height:100px; background-size: cover;" alt="Card image cap">
                        <div class="card-body" style="padding: 0.25rem;">
                            <h5 class="card-title" style="font-size:14px; text-align: center">Bộ môn<br>
                                {{$bm->tenbomon}}
                            </h5>
                            <small style="text-align: center;">
                                <div class="dropdown">
                                    <a href="#" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"
                                        style="color: #be0f0f;">
                                        Chi tiết
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item"
                                                href="{{asset('gioi-thieu-chung4')}}/{{$bm->id}}">Giới thiệu chung</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="{{asset('can-bo-giang-vien')}}/{{$bm->id}}">Cán bộ và giảng
                                                viên</a></li>
                                        <li><a class="dropdown-item"
                                                href="{{asset('huong-nghien-cuu')}}/{{$bm->id}}">Các hướng nghiên
                                                cứu</a></li>
                                        <li><a class="dropdown-item"
                                                href="{{asset('cong-trinh-khoa-hoc')}}/{{$bm->id}}">Các công trình khoa
                                                học</a></li>
                                        <li><a class="dropdown-item"
                                                href="{{asset('hoc-phan-dam-nhan')}}/{{$bm->id}}">Các học phần đảm
                                                nhận</a></li>
                                        <li><a class="dropdown-item" href="{{asset('co-so-vat-chat')}}/{{$bm->id}}">Cơ
                                                sở vật chất</a></li>
                                        <li><a class="dropdown-item"
                                                href="{{asset('sach-da-xuat-ban')}}/{{$bm->id}}">Sách đã xuất bản</a>
                                        </li>
                                    </ul>
                                </div>
                            </small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- Học sinh - Sinh viên-->
    @include('frontend.sinhvien')

    <!-- Tin tức -->
    @include('frontend.tintuc.tintuc')

    <!-- Tài liệu -->
    @include('frontend.tailieu')

    @if(Auth::check())
    <section class="page-section bg-light" id="dangxuat">
        <div class="container">
            <br><br>
            <div class="text-center">
                <h3 class="section-heading text-uppercase">Viện Kinh tế và Quản lý</h3>
                <div><a class="btn btn-secondary" onclick="return confirm('Bạn muốn đăng xuất?')" href="logout"
                        role="button">Đăng xuất</a></div><br><br>
                <img style="width: 100px; height: 70px;" src="{{asset('/index/assets/img/logo_sem.PNG')}}" />
                <a href="https://www.facebook.com/vienKTQL"><img src="{{asset('index/assets/img/facebook.png')}}"
                        width="32" style="width: 32px;"></a>
            </div><br>
        </div>
    </section>
    @else
    <section class="page-section bg-light" id="dangnhap">
        <div class="container">
            <br><br>
            <div class="text-center">
                <h3 class="section-heading text-uppercase">Viện Kinh tế và Quản lý</h3>
                <div><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#loginModal">Đăng
                        nhập</button></div><br><br>
                <img style="width: 100px; height: 70px;" src="{{asset('/index/assets/img/logo_sem.PNG')}}" />
                <a href="https://www.facebook.com/vienKTQL"><img src="{{asset('index/assets/img/facebook.png')}}"
                        width="32" style="width: 32px;"></a>
            </div><br>
        </div>
    </section>
    @endif
    <!-- Footer-->
    <div style="background-color: #811218;">
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left" style="color: aliceblue;">© SEM</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <!-- <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a> -->
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a style="color: aliceblue;" href="#">Lên đầu trang</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('index/js/scripts.js')}}"></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <!-- Boostrap 4.5 -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <!-- Card -->
    <script src="{{asset('card/js/script.js')}}"></script>




    <script>
    $(document).ready(function() {
        $("#myCarousel").on("slide.bs.carousel", function(e) {
            var $e = $(e.relatedTarget);
            var idx = $e.index();
            var itemsPerSlide = 3;
            var totalItems = $(".carousel-item").length;

            if (idx >= totalItems - (itemsPerSlide - 1)) {
                var it = itemsPerSlide - (totalItems - idx);
                for (var i = 0; i < it; i++) {
                    // append slides to end
                    if (e.direction == "left") {
                        $(".carousel-item")
                            .eq(i)
                            .appendTo(".carousel-inner");
                    } else {
                        $(".carousel-item")
                            .eq(0)
                            .appendTo($(this).find(".carousel-inner"));
                    }
                }
            }
        });
    });
    </script>
</body>

</html>