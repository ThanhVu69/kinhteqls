<link href="{{asset('/index/css/nav.css')}}" rel="stylesheet" />
<link href="{{asset('/index/css/styles.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('index/css/header.css')}}">

<div class="navbar navbarsmall-expand-lg navbar-dark fixed-top" style="background-color: #9c1010;">
    <ul class="navbar-nav">
        <li><a style="color:#fff;" class="nava" href="{{asset('bo-mon-trung-tam')}}">Bộ môn - Trung tâm</a></li>
        <li><a style="color:#fff;" class="nava" href="{{asset('bo-suu-tap')}}">Bộ sưu tập</a></li>
        <li><a style="color:#fff;" class="nava" href="#">Thư viện số</a></li>
        @if(Auth::check())
        <li><a style="color:#fff;" class="nava" href="{{asset('trang-quan-ly')}}">Bảng điều khiển</a></li>
        <li><a style="color:#fff;" class="nava" onclick="return confirm('Bạn muốn đăng xuất?')" href="logout">Đăng
            xuất</a></li>
        @else
        <li><a style="color:#fff;" class="nava" data-toggle="modal" data-target="#loginModal" href="#">Đăng nhập</a>
        </li>
        @endif
    </ul>
</div>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav"
    style="background-color: rgb(255 255 255 / 90%); top: 40px;">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img
                src="{{asset('index/assets/img/logo_hust.png')}}" style="position: center; width:auto; height: 70px"
                alt="" /></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" href="#page-top" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto" style="font-weight: 800;">
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('trang-chu')}}" >
                        Trang chủ
                    </a>
                </li>
                <li class="nav-item">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown">
                            Giới thiệu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style="background-image: url('index/assets/img/white.jpg'); background-size: cover;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-1">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="dropdown-item"><b>Giới thiệu</b>
                                        </div>
                                        <hr style=" border-top: 3px groove #003366;">
                                        <a class="dropdown-item" href="{{asset('thu-ngo')}}">Thư ngỏ</a>
                                        <hr>
                                        <a class="dropdown-item" href="{{asset('lich-su-hinh-thanh')}}">Lịch sử
                                            hình thành và phát triển</a>
                                        <hr>
                                        <a class="dropdown-item" href="{{asset('co-cau-to-chuc')}}">Cơ cấu tổ
                                            chức</a>
                                        <!-- <hr>
                                        <a class="dropdown-item" href="{{asset('dao-tao-sau-dai-hoc')}}">Cán bộ và
                                            giảng viên</a>
                                        <hr>
                                        <a class="dropdown-item" href="{{asset('dao-tao-sau-dai-hoc')}}">Cơ sở vật
                                            chất</a> -->
                                    </div>
                                    <div class="col-sm-5">
                                        <img src="{{asset('index/assets/img/Introduction.png')}}">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown">
                            Tin tức - sự kiện
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style="background-image: url('index/assets/img/white.jpg'); background-size: cover;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="dropdown-item"><b>Tin tức - sự kiện</b>
                                        </div>
                                        <hr style=" border-top: 3px groove #003366;">
                                        <a class="dropdown-item" href="{{asset('tin-tuc')}}">Tin tức</a>
                                        <hr>
                                        <a class="dropdown-item" href="{{asset('su-kien')}}">Sự kiện</a>
                                        <hr>
                                    </div>
                                    <div class="col-sm-5">
                                        <img src="{{asset('index/assets/img/bk.jpg')}}">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown">
                            Tuyển sinh
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style="background-image: url('index/assets/img/white.jpg'); background-size: cover;">
                            <div class="row">
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-4">
                                    <div class="dropdown-item"><b>tuyển sinh</b>
                                    </div>
                                    <hr style=" border-top: 3px groove #003366;">
                                    <a class="dropdown-item" href="https://www.hust.edu.vn/thong-tin-tuyen-sinh">Sinh viên</a>
                                    <hr>
                                    <a class="dropdown-item" href="https://www.hust.edu.vn/tuyen-sinh-cao-hoc">Thạc sỹ khoa học</a>
                                    <hr>
                                    <a class="dropdown-item" href="https://www.hust.edu.vn/tuyen-sinh-cao-hoc">Thạc sỹ kỹ thuật</a>
                                    <hr>
                                    <a class="dropdown-item" href="https://www.hust.edu.vn/tuyen-sinh-nghien-cuu-sinh">Nghiên cứu sinh</a>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{asset('index/assets/img/levels-of-study-jpeg.jpg')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown">
                            Đào tạo
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style="background-image: url('index/assets/img/white.jpg'); background-size: cover;">
                            <div class="row">
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-4">
                                    <div class="dropdown-item"><b>đào tạo</b>
                                    </div>
                                    <hr style=" border-top: 3px groove #003366;">
                                    <a class="dropdown-item" href="{{asset('gioi-thieu-chung1')}}">Đào tạo đại
                                        học</a>
                                    <hr>
                                    <a class="dropdown-item" href="{{asset('dao-tao-sau-dai-hoc')}}">Đào tạo sau
                                        đại học</a>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{asset('index/assets/img/levels-of-study-jpeg.jpg')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown">
                            Nghiên cứu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style="background-image: url('index/assets/img/white.jpg'); background-size: cover;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="dropdown-item"><b>Nghiên cứu</b>
                                        </div>
                                        <hr style=" border-top: 3px groove #003366;">
                                        <a class="dropdown-item" href="#">Sản phẩm
                                            nghiên cứu</a>
                                        <hr>
                                        <a class="dropdown-item" href="#">Lĩnh vực
                                            nghiên cứu</a>
                                        <hr>
                                        <a class="dropdown-item" href="#">Tác giả
                                            nghiên cứu</a>
                                        <hr>
                                    </div>

                                    <div class="col-sm-5">
                                        <img
                                            src="{{asset('index/assets/img/newsimages_small_dissertation_260215.jpg')}}">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown">
                            Hợp tác
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown">
                            Sinh viên
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style="background-image: url('index/assets/img/white.jpg'); background-size: cover;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="dropdown-item"><b>Sinh viên</b>
                                        </div>
                                        <hr>
                                        <a class="dropdown-item" href="{{asset('dao-tao-sau-dai-hoc')}}">BCH LIÊN CHI ĐOÀN</a>
                                        <hr>
                                        <a class="dropdown-item" href="{{asset('dao-tao-sau-dai-hoc')}}">BCH LIÊN CHI HỘI</a>
                                        <hr>
                                        <a class="dropdown-item" href="{{asset('dao-tao-sau-dai-hoc')}}">CÁC CÂU LẠC
                                            BỘ</a>
                                        <hr>
                                        <a class="dropdown-item" href="{{asset('dao-tao-sau-dai-hoc')}}">THỰC TẬP SINH</a>
                                    </div>
                                    <div class="col-sm-5">
                                        <img src="{{asset('index/assets/img/Home-Study-Health-Tips-1.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown">
                            Cựu sinh viên
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style="background-image: url('index/assets/img/white.jpg'); background-size: cover;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="dropdown-item"><b>Cựu sinh viên</b>
                                        </div>
                                        <hr style=" border-top: 3px groove #003366;">
                                        <a class="dropdown-item" href="{{asset('https://alumni.hust.edu.vn/')}}">Cựu sinh viên của Trường</a>
                                        <hr>
                                        <a class="dropdown-item" href="#">Cựu sinh viên của Viện</a>
                                        <hr>
                                    </div>
                                    <div class="col-sm-5">
                                        <img src="{{asset('index/assets/img/c424c6f61fa2effcb6b3.jpg')}}">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown">
                            Tài liệu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style="background-image: url('index/assets/img/white.jpg'); background-size: cover;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="dropdown-item"><b>Tài liệu</b>
                                        </div>
                                        <hr style=" border-top: 3px groove #003366;">
                                        <a class="dropdown-item" href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=31">Tài liệu dành cho sinh viên đại học</a>
                                        <hr>
                                        <a class="dropdown-item" href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=42">Tài liệu dành cho học viên cao học</a>
                                        <hr>
                                        <a class="dropdown-item" href="https://ctt-daotao.hust.edu.vn/DisplayWeb/DisplayMenu?menu=42">Tài liệu dành cho nghiên cứu sinh</a>
                                        <hr>
                                        <a class="dropdown-item" href="#">Tài liệu dành cho cán bộ giảng viên</a>
                                        <hr>
                                    </div>
                                    <div class="col-sm-5">
                                        <img src="{{asset('index/assets/img/c424c6f61fa2effcb6b3.jpg')}}">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>