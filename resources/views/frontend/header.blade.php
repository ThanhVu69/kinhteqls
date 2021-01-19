<link href="{{asset('/index/css/nav.css')}}" rel="stylesheet" />
<link href="{{asset('/index/css/styles.css')}}" rel="stylesheet" />

<!-- Navigation-->
<div class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #9c1010;">
        <ul class="navbar-nav">
            <li><a style="color:#fff;" class="nava" href="#">Bộ môn - Trung tâm</a></li>
            <li><a style="color:#fff;" class="nava" href="#">Thư viện số</a></li>
            @if(Auth::check())
            <li><a style="color:#fff;" class="nava" href="trang-quan-ly">Bảng điều khiển</a></li>
            <li><a style="color:#fff;" class="nava" onclick="return confirm('Bạn muốn đăng xuất?')" href="logout">Đăng
                    xuất</a></li>
            @else
            <li><a style="color:#fff;" class="nava" data-toggle="modal" data-target="#loginModal" href="#">Đăng nhập</a>
            </li>
            @endif
        </ul>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav"
            style="background-color: rgb(255 255 255 / 90%); top: 40px;">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img
                        src="{{asset('index/assets/img/logo_hust.png')}}"
                        style="position: center; width:auto; height: 70px" alt="" /></a>
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img
                        src="{{asset('index/assets/img/logo.png')}}" style="position: center; width:auto; height: 60px"
                        alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto" style="font-weight: 800;">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="trang-chu">Trang chủ</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#gioithieuchung">Đào tạo</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#nghiencuuhoptac">Nghiên cứu -
                                Hợp
                                tác</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#sinhvien">Học viên -Sinh
                                viên</a>
                        </li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#tintuc">Tin tức - Sự kiện</a>
                        </li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#tailieu">Tài liệu</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>