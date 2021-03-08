<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đào tạo sau đại học</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('trangphu/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('trangphu/css/blog-post.css')}}" rel="stylesheet">
    <link href="{{asset('index/css/daotao.css')}}" rel="stylesheet">
</head>

<body>
    @include('frontend.header')
    <br><br><br><br>
    <!-- <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="width:auto; height:auto;" src="{{asset('index/assets/img/dai-hoc-bach-khoa.jpg')}}"
                        class="d-block w-1" alt="...">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">

                <h5 class="mt-4" style="color: #9c1010;">GIỚI THIỆU CHUNG ĐÀO TẠO SAU ĐẠI HỌC</h5>
                <hr>
                <div style="font-size: 13px;">
                    <p style="text-align: right;">@foreach($daotaosaudh as $mh)
                        {!! $mh->gioithieuchung !!}<br><br><br><br><br><br><br><br>
                        @endforeach</p>
                </div>
            </div>
            //chỗ này là include slidebar
        </div>
    </div> -->


    <section class="page-section">
        <br><br>
        <div>
            <!-- <div class="col-lg-12">
                <h5 class="mt-4" style="color: #9c1010;">GIỚI THIỆU CHUNG</h5>
            </div> -->
            <div style=" border-top: 3px groove #003366;">
                <br><br>
                <div class="cardz">
                    <div class="row ">
                        <div class="col-md-8">
                            <img src="{{asset('index/assets/img/1557364192-work_while_you_study_banner.jpg')}}">
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <!-- <p class="card-text" style="font-size: 13px; color:#000;"><b>ĐÀO TẠO SAU ĐẠI HỌC</b></p>
                                <hr style=" border-top: 3px groove #003366;">
                                <a href="{{asset('dao-tao-sau-dai-hoc')}}">
                                    <p class="card-text" style="font-size: 13px; color:#003366;">Giới thiệu</p>
                                </a>
                                <br>
                                <a href="{{asset('danh-sach-luan-van')}}">
                                    <p class="card-text" style="font-size: 13px; color:#003366;">Danh sách luận văn cao
                                        học</p>
                                </a>
                                <br>
                                <a href="{{asset('danh-sach-nghien-cuu-sinh')}}">
                                    <p class="card-text" style="font-size: 13px; color:#003366;">Danh sách Nghiên cứu
                                        sinh và Đề tài nghiên cứu</p>
                                </a>
                                <br>
                                <a href="{{asset('danh-sach-tap-chi')}}">
                                    <p class="card-text" style="font-size: 13px; color:#003366;">Danh sách tạp chí/ Hội
                                        nghị khoa học</p>
                                </a>
                                <br> -->
                                <hr style=" groove #919191; border-top: 3px groove #003366;">
                                <p class="card-text" style="font-size: 13px; color:#000;"><b>CÁC CHƯƠNG TRÌNH ĐÀO
                                        TẠO</b></p>
                                <div class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" style="font-size: 13px; color:#003366;">
                                        Đào tạo thạc sỹ
                                    </a>
                                    <div class="dropdown-menu" style="font-size: 15px;"
                                        aria-labelledby="navbarDropdownMenuLink">
                                        <a style="color: #000" class="dropdown-item"
                                            href="{{asset('dao-tao-thac-sy')}}">Giới thiệu
                                           </a>
                                        <!-- <a style="color: #000" class="dropdown-item"
                                            href="{{asset('chuan-dau-ra')}}">Chuẩn đầu ra của
                                            chương trình</a> -->
                                        <a style="color: #000" class="dropdown-item" href="{{asset('doi-tuong')}}">Đối
                                            tượng tuyển
                                            sinh</a>
                                        <a style="color: #000" class="dropdown-item" href="{{asset('cau-truc')}}">Cấu
                                            trúc của chương
                                            trình đào tạo</a>
                                        <a style="color: #000" class="dropdown-item"
                                            href="{{asset('chuong-trinh-chuyen-doi')}}">Chương
                                            trình chuyển đổi</a>
                                        <a style="color: #000" class="dropdown-item"
                                            href="{{asset('danh-muc-hoc-phan')}}">Danh mục học
                                            phần</a>
                                        <a style="color: #000" class="dropdown-item"
                                            href="{{asset('danh-sach-giang-vien')}}">Danh sách
                                            giảng viên</a>
                                    </div>
                                </div>
                                <div class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" style="font-size: 13px; color:#003366;">
                                        Đào tạo tiến sỹ
                                    </a>
                                    <div class="dropdown-menu" style="font-size: 13px;"
                                        aria-labelledby="navbarDropdownMenuLink">
                                        <a style="color: #000" class="dropdown-item"
                                            href="{{asset('dao-tao-tien-sy')}}">Giới thiệu
                                           </a>
                                        <a style="color: #000" class="dropdown-item"
                                            href="{{asset('kinh-te-hoc')}}">Chương trình tiến
                                            sỹ Kinh tế học</a>
                                        <a style="color: #000" class="dropdown-item"
                                            href="{{asset('dau-ra-kinh-te-hoc')}}">Chuẩn đầu ra
                                            của Chương trình tiến sỹ Kinh tế
                                            học</a>
                                        <a style="color: #000" class="dropdown-item"
                                            href="{{asset('quan-ly-cong-nghiep')}}">Chương
                                            trình tiến sỹ Quản lý công nghiệp</a>
                                        <a style="color: #000" class="dropdown-item"
                                            href="{{asset('dau-ra-quan-ly-cong-nghiep')}}">Chuẩn đầu ra của Chương trình
                                            tiến sỹ Quản
                                            lý công nghiệp</a>
                                    </div>
                                </div>
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