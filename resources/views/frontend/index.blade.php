<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Viện Kinh tế và Quản lý</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('/index/css/styles.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body id="page-top">
    @include('sweetalert::alert')
    <!-- Modal Login-->
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
    <!-- End Modal Login -->
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #000000bd;">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img
                    src="{{asset('/index/assets/img/logo_sem.PNG')}}" style="width:100px; height: 70px" alt="" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#daotao">Đào tạo</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#gioithieuchung">Giới thiệu
                            chung</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#nghiencuuhoptac">Nghiên cứu - Hợp
                            tác</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#bomon">Bộ môn - Trung tâm</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#sinhvien">Học viên -Sinh viên</a>
                    </li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Tin tức - Sự kiện</a>
                    </li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Tài liệu</a>
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
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">VIỆN KINH TẾ VÀ QUẢN LÝ</div>
            <!-- <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a> -->
        </div>
    </header>
    <!-- Đào tạo -->

    <section class="page-section" id="daotao">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Đào tạo</h2>
                <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-address-book fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="{{asset('mo-hinh-dao-tao')}}">
                        <h4 class="my-3" style="color: black;">Mô hình đào tạo </h4>
                    </a>
                    <p class="text-muted">Mô hình đào tạo và chương trình đào tạo áp dụng từ các khóa nhập học năm 2009
                        (K54) được đổi mới một cách cơ bản,
                        toàn diện theo những chuẩn mực quốc tế.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="{{asset('gioi-thieu-chung1')}}">
                        <h4 class="my-3" style="color: black;">Đào tạo đại học</h4>
                    </a>
                    <!-- <ul class="dropdown-menu" aria-labelledby="daotaodaihoc">
                            <li><a class="dropdown-item" href="{{asset('gioi-thieu-chung1')}}">Giới thiệu chung</a></li>
                            @foreach($chuongtrinhdaotao as $ct)
                            <li><a class="dropdown-item" href="#">{{$ct->tenchuongtrinh}}</a></li>
                            @endforeach
                        </ul> -->
                    <p class="text-muted">Sau gần 55 năm đào tạo, số sinh viên chính quy đã tốt nghiệp- tính đến đầu năm
                        2019 trên 9.000 Kỹ sư
                        Kinh tế và Quản lý của các chuyên ngành.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-desktop fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="{{asset('dao-tao-sau-dai-hoc')}}">
                        <h4 class="my-3" style="color: black;">Đào tạo sau đại học</h4>
                    </a>
                    <p class="text-muted">Hiện nay, Viện có các chương trình đào tạo Sau đại học, bao gồm:
                        Đào tạo bậc cao học chuyên ngành: Quản trị kinh doanh, Quản lý kinh tế
                        và Các chuyên ngành đào tạo cho nghiên cứu sinh: Quản lý công nghiệp,Kinh tế học</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Giới thiệu chung-->

    <section class="page-section bg-light" id="gioithieuchung">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Giới thiệu chung</h2>
                <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                            <img class="img-fluid" style="width: 250px; height: 200px;"
                                src="{{asset('/index/assets/img/gt1.jpg')}}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading" style="text-align:center">Thư ngỏ</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                            <img class="img-fluid" style="width: 250px; height: 200px;"
                                src="{{asset('/index/assets/img/gt2.jpg')}}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading" style="text-align:center">Lịch sử hình thành và phát
                                triển</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                            <img class="img-fluid" style="width: 250px; height: 200px;"
                                src="{{asset('/index/assets/img/gt3.jpg')}}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading" style="text-align:center">Cơ cấu tổ chức</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                            <img class="img-fluid" style="width: 250px; height: 200px;"
                                src="{{asset('/index/assets/img/gt4.jpg')}}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading" style="text-align:center">Cán bộ và giảng viên</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                            <img class="img-fluid" style="width: 250px; height: 200px;"
                                src="{{asset('/index/assets/img/gt5.jpg')}}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading" style="text-align:center">Cơ sở vật chất</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                            <img class="img-fluid" style="width: 250px; height: 200px;"
                                src="{{asset('/index/assets/img/gt8.jpg')}}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading" style="text-align:center">Thông tin liên hệ</div>
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
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h3 class="text-uppercase">Thư ngỏ</h3><br>
                                <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> -->
                                <div style="text-align: left;">
                                    <p>Kể từ khi mới thành lập (1965) cho tới nay, Viện Kinh tế và Quản lý (trước là
                                        Khoa Kinh tế và Quản lý) thuộc Trường Ðại Học Bách Khoa Hà Nội có trách nhiệm
                                        đào tạo cán bộ quản lý cho các doanh nghiệp, cho các ngành kinh tế khác nhau với
                                        các trình độ từ cử nhân cao đẳng, kỹ sư, thạc sĩ, tới tiến sĩ với các loại hình
                                        đào tạo đa dạng như chính quy, tại chức, và từ cuối năm 1992 có thêm cao đẳng và
                                        bằng 2.</p>
                                    <p>
                                        Sau gần 55 năm xây dựng và phát triển, hiện nay Viện có 77 cán bộ giảng dạy và
                                        viên chức. Với khoảng thời gian lịch sử đó, Viện đã đạt được một số thành tựu
                                        quan trọng trong các lĩnh vực: đào tạo, nghiên cứu khoa học, chuyển giao công
                                        nghệ, phục vụ sản xuất kinh doanh và hợp tác quốc tế. Nhờ vậy, Viện đã có một vị
                                        thế vững mạnh trong trường Đại Học Bách Khoa Hà Nội, trong xã hội và quốc tế.
                                    </p>
                                    <p>
                                        Bên cạnh nguồn lực quý báu nhất là đội ngũ cán bộ giảng dạy có trình độ cao và
                                        đầy tâm huyết, Viện cũng hết sức chú trọng việc khai thác các mối quan hệ trong
                                        nước và quốc tế và để tạo ra cho mình nhiều phương tiện vật chất phục vụ đào tạo
                                        hiện đại bổ sung vào những trang thiết bị đã được nhà trường đầu tư. Với tư cách
                                        là đối tác trong các dự án đào tạo phối hợp với các tổ chức quốc tế, cán bộ
                                        giảng dạy và sinh viên của Viện có rất nhiều cơ hội để học hỏi, cập nhật kiến
                                        thức mới, các phong cách mới thông qua các hoạt động trao đổi giảng viên, sinh
                                        viên với các trường đại học của Pháp, Ðức, Phần Lan,...
                                    </p>
                                    <p>
                                        Thông qua các hội thảo khoa học, các chương trình nghiên cứu, tư vấn phối hợp
                                        với các doanh nghiệp, Viện duy trì được mối liên kết chặt chẽ giữa đào tạo và lý
                                        thuyết với thực hành, mở ra cho sinh viên tốt nghiệp những cơ hội tìm kiếm việc
                                        làm và thăng tiến. Cũng chính nhờ mối quan hệ rộng rãi với bên ngoài mà các
                                        chương trình đào tạo của Viện luôn được cập nhật và đạt được sự thích nghi cao
                                        với những yêu cầu thực tế của doanh nghiệp.
                                    </p>
                                    <p>
                                        Định hướng phát triển:<br>
                                        <li>Đa dạng hóa chương trình và loại hình đào tạo, tăng cường đào tạo ở trình độ
                                            cao
                                            như Thạc sỹ và Tiến sỹ.</li>
                                        <li>Gắn đào tạo với thực tế thông qua việc liên kết đào tạo với các doanh nghiệp
                                            và
                                            các chương trình đào tạo ngắn hạn</li>
                                        <li>Tư vấn cho các doanh nghiệp</li>
                                        <li>Đẩy mạnh hợp tác đào tạo quốc tế để nâng cao năng lực và đổi mới chương
                                            trình và
                                            phương thức giảng dạy</li>
                                    </p>
                                    <p>
                                        Viện Kinh tế và Quản lý xin bày tỏ lòng biết ơn sâu sắc và chân thành đến các
                                        cấp lãnh đạo, các cơ quan, đoàn thể, các doanh nghiệp, các thế hệ thầy cô giáo,
                                        cán bộ công nhân viên và sinh viên đã chung sức xây dựng Viện trưởng thành và
                                        lớn mạnh trong thời gian qua. Chúng tôi tin rằng trong thời gian tới Viện sẽ trở
                                        thành nơi đào tạo những nhà quản lý kinh doanh giỏi, là trung tâm tư vấn tin cậy
                                        cho các doanh nghiệp và các ngành kinh tế, nhằm đưa đất nước ta vững bước phát
                                        triển tiến vào nền kinh tế tri thức và hội nhập quốc tế.
                                    </p>
                                </div>
                                <ul class="list-inline">
                                    <li><b>Viện Kinh tế và Quản lý - Trường ĐHBK Hà Nội</b></li>

                                    <li>Viện Trưởng</li>
                                    <li><b>GVC.TS. Nguyễn Danh Nguyên</b></li>
                                </ul>
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
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h3 class="text-uppercase">Lịch sử hình thành và phát triển</h3><br>
                                <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> -->
                                <div style="text-align: left;">
                                    <p>Viện Kinh tế và Quản lý, tiền thân là Khoa Kỹ sư kinh tế trực thuộc Trường Đại
                                        học Bách khoa Hà Nội được thành lập vào tháng 1 năm 1965 theo Quyết định số
                                        56/1965/QĐ ngày 29 tháng 1 năm 1965 của Bộ trưởng Bộ Giáo dục (nay là Bộ Giáo
                                        dục và Đào tạo). Khoa Kỹ sư kinh tế được tổ chức với 7 bộ môn: bộ môn Kinh tế và
                                        tổ chức Cơ khí, bộ môn Kinh tế Năng lượng, bộ môn Kinh tế và tổ chức Hóa, bộ môn
                                        Kinh tế và tổ chức Luyện kim, bộ môn Kinh tế và tổ chức Xây dựng, bộ môn Kinh tế
                                        và tổ chức Mỏ, và bộ môn Kinh tế cơ sở. Nhiệm vụ của Khoa lúc bấy giờ là đào tạo
                                        sinh viên hệ chính quy, chuyên tu và tại chức thuộc 6 chuyên ngành nói trên,
                                        ngoài ra còn giảng dạy các môn Kinh tế và quản lý sản xuất, hướng dẫn và chấm đồ
                                        án cho các sinh viên chuyên ngành kỹ thuật của trường. Cuối năm 1966, Khoa chỉ
                                        còn 5 bộ môn đào tạo 4 chuyên ngành chính, do hai bộ môn Kinh tế và tổ chức Mỏ
                                        và Kinh tế tổ chức Xây dựng được chuyển về hai trường đại học mới mở, Đại học Mỏ
                                        địa chất và Đại học Xây dựng.</p>
                                    <p>
                                        Năm 1978 – 1994, do thay đổi cơ chế tổ chức của Trường từ 3 cấp về 2 cấp; Khoa
                                        Kỹ sư Kinh tế được chia thành 2 khoa: (1) Khoa Kinh tế Cơ khí và (2) Khoa Kinh
                                        tế Năng lượng, Hóa và Luyện kim. Từ năm 1994, Khoa được Bộ Giáo dục và Đào tạo
                                        chính thức được giao nhiệm vụ đào tạo Thạc sỹ và đồng thời cho phép mở thêm
                                        chuyên ngành Quản trị Kinh doanh.
                                    </p>
                                    <p>
                                        Năm 1995, cơ cấu tổ chức của Trường chuyển về 3 cấp; hai Khoa kinh tế nói trên
                                        được sáp nhập và đổi tên thành Khoa Kinh tế và Quản lý. Cùng với việc sáp nhập
                                        và đổi tên, mục tiêu, chức năng, và nhiệm vụ của Khoa. Năm 1996, thực hiện chủ
                                        trương của Ban Giám hiệu nhà trường, Khoa lại tiến hành đổi mới cơ cấu một lần
                                        nữa cho phù hợp với tình hình thực tiễn của xã hội, nhiều chuyên ngành không còn
                                        phù hợp đã được ngừng đào tạo và thêm một số chuyên ngành mới. Hai bộ môn mới
                                        được thành lập là Bộ môn Kinh tế học và Bộ môn Quản trị Kinh doanh, nâng tổng số
                                        chuyên ngành đào tạo chính quy lên 7 chuyên ngành: Kinh tế Cơ khí, Kinh tế Năng
                                        lượng, Kinh tế Hóa – Thực phẩm, Kinh tế Hàng không, Quản trị doanh nghiệp, Tài
                                        chính Doanh nghiệp và Marketing. Trong thời gian này, Khoa có nhiều điều kiện
                                        thuận lợi cho phát triển toàn diện năng lực của Khoa, cải thiện chất lượng đào
                                        tạo, đội ngũ giảng viên và cơ sở vật chất. Việc nghiên cứu khoa học và hợp tác
                                        của Khoa cũng được mở rộng, giúp Khoa có thêm nhiều điều kiện về cơ sở vật chất
                                        và nâng cao trình độ giảng viên cùng với việc từng bước chuyển đổi chương trình
                                        để hội nhập với đào tạo quốc tế. Trong thời gian này, Khoa liên tục mở rộng mạng
                                        lưới đào tạo của mình ra các địa bàn ngoài Hà Nội như Vũng Tàu, Quảng Ninh, Hải
                                        Phòng, Quy Nhơn…. Nhiều dự án quốc tế cũng được Khoa tiếp nhận và quản lý một
                                        cách có hiệu quả giúp nâng cao chất lượng đào tạo cũng như vị thế của Khoa trong
                                        trường và trong xã hội.
                                    </p>
                                    <p>
                                        Từ năm 2001, trước quy mô ngày càng mở rộng của Khoa, Khoa Kinh tế và Quản lý
                                        chú trọng đến việc phát triển nguồn nhân lực của mình bằng việc tuyển dụng thêm
                                        nhiều cán bộ trẻ có năng lực và trình độ cao, tâm huyết với nghề. Đội ngũ giảng
                                        viên trẻ này được sự giúp đỡ và chia sẻ tận tình của các lớp thầy cô đi trước,
                                        đang ngày càng phát triển cùng với sự năng động và sáng tạo đã thực sự tạo một
                                        luồng khí mới, động lực mới cho một tương lai phát triển rực rỡ của Viện.
                                    </p>
                                    <p>
                                        Đến năm 2003, trước nhu cầu của xã hội và chiến lược lâu dài của trường, Khoa
                                        Kinh tế và Quản lý một lần nữa mở rộng ngành nghề và cơ cấu tổ chức của mình
                                        bằng việc ra đời hai bộ môn mới, Bộ môn Tài chính-kế toán và Bộ môn Quản lý Công
                                        nghiệp. Việc ra đời hai bộ môn mới này chứng tỏ sự quyết tâm theo đuổi chiến
                                        lược chung của toàn trường là: Phát triển Trường Đại học Bách khoa trở thành
                                        trường đại học đa ngành, đa lĩnh vực.
                                    </p>
                                    <p>Năm 2011, nhằm tạo cơ hội cho Khoa Kinh tế và Quản lý đáp ứng nhu cầu đào tạo mở
                                        rộng và linh hoạt trong thiết kế các chương trình đào tạo phù hợp với yêu cầu xã
                                        hội, Trường ĐHBK Hà Nội đã chấp nhận cho Khoa chuyển thành Viện Kinh tế và Quản
                                        lý. Cuối năm 2012 Trường đã ra quyết định thành lập thêm Bộ môn Khoa học Quản lý
                                        và Luật và Trung tâm Nghiên cứu Kinh tế và Quản lý, trực thuộc Viện Kinh tế và
                                        Quản lý, đưa quy mô của Viện thành 6 Bộ môn và 1 Trung tâm.</p>
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
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h3 class="text-uppercase">Cơ cấu tổ chức</h3><br>
                                <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> -->
                                <img class="img-fluid d-block mx-auto"
                                    src="{{asset('/index/assets/img/cocautochuc.png')}}" alt="" />
                                <p>Hội đồng Khoa học và Đào tạo gồm Ban lãnh đạo Viện, các Trưởng Bộ môn, các nhà Khoa
                                    học và giảng viên có uy tín và chuyên môn sâu trong đào tạo và nghiên cứu khoa học
                                    trong và ngoài nhà trường. Hội đồng Khoa học và Đào tạo chịu trách nhiệm tư vấn cho
                                    Ban lãnh đạo Viện xây dựng và phát triển nội dung chương trình đào tạo; định hướng
                                    các hoạt động nghiên cứu khoa học và chuyển giao tri thức; xây dựng chiến lược phát
                                    triển chung của Viện.</p>
                                <p>
                                <h3><b>Ban lãnh đạo Viện</b></h3>
                                </p>
                                <div class="card-deck">
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <img class="card-img-top"
                                                src="{{asset('/index/assets/img/nguyen_danh_nguyen.jpg')}}"
                                                style="width: auto; height:200px;" alt="Card image cap">
                                            <!-- <div class="card-body">
                                                <h5 class="card-title" style="font-size:14px; text-align: center">Bộ môn<br> KHQL và Luật
                                                </h5>
                                            </div> -->
                                            <div class="card-footer">
                                                <a href="#">
                                                    <p class="text-muted">Xem chi tiết</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <img class="card-img-top"
                                                src="{{asset('/index/assets/img/pham_thi_thanh_hong.jpg')}}"
                                                style="width: auto; height:200px;" alt="Card image cap">
                                            <!-- <div class="card-body">
                                                <h5 class="card-title" style="font-size:14px; text-align: center">Bộ môn<br> Quản lý công
                                                    nghiệp</h5>
                                            </div> -->
                                            <div class="card-footer">
                                                <a href="#">
                                                    <p class="text-muted">Xem chi tiết</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
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
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h3 class="text-uppercase">Cán bộ và giảng viên</h3>
                                <p class="item-intro text-muted">Viện Kinh tế và Quản lý hiện có 75 cán bộ giảng dạy và
                                    4 cán bộ phục vụ giảng dạy, là những người hết lòng với công việc và có chuyên môn
                                    vững vàng trong các lĩnh vực tài chính, kinh tế năng lượng, kinh tế học, kế toán,
                                    quản trị sản xuất và marketing.</p>
                                <p>Bảng thống kê</p>
                                <ul class="list-inline">
                                    <li>Cập nhật ngày: </li>
                                </ul>
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
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h3 class="text-uppercase">Cơ sở vật chất</h3>
                                <p class="item-intro text-muted">Không gian làm việc và trang thiết bị của Viện được bố
                                    trí tại các phòng thuộc Tầng 2 và Tầng 3 của tòa nhà C9 - Trường ĐHBK Hà Nội.</p>
                                <!-- <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/05-full.jpg" alt="" /> -->
                                <p>Sơ đồ chỉ dẫn các Bộ môn và Trung tâm của Viện Kinh tế và Quản lý:</p><br>
                                <p>Khu vực Văn phòng Viện và các Bộ môn được bố trí trên 2 tầng của tòa nhà C9 (Tầng 2 -
                                    Các Bộ môn; Tầng 3 - Văn phòng Viện và Ban lãnh đạo Viện). Ngoài ra, Viện còn có một
                                    phòng Hội thảo tại tầng 2 - phòng 205 và một phòng họp được bố trí tại tầng 3 nhà
                                    C9.</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset('/index/assets/img/csvc2.jpg')}}"
                                    alt="" />
                                <ul class="list-inline">
                                    <li>Cập nhật ngày:</li>
                                </ul>
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
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <div style="text-align: left;">
                                    <h3 class="text-uppercase">Thông tin liên hệ</h3>
                                    <p>VIỆN KINH TẾ VÀ QUẢN LÝ<br>
                                        Trường Đại học Bách Khoa Hà Nội</p>
                                    <p>Địa chỉ:<br>
                                        Phòng 302-304 Nhà C9, Trường Đại học Bách Khoa Hà Nội; Số 1 Đại Cồ Việt, Q. Hai
                                        Bà
                                        Trưng, Tp. Hà Nội<br>
                                        Điện thoại: (84-4) 3869 2304<br>
                                        Email: sem@hust.edu.vn<br>
                                        Website: http://sem.hust.edu.vn<br>
                                        Hotline tư vấn tuyển sinh: 082 8692304</p>
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
    <!-- Nghiên cứu -hợp tác-->

    <section class="page-section" id="nghiencuuhoptac">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Nghiên cứu hợp tác</h2>
                <h3 class="section-subheading text-muted">Định hướng nghiên cứu của Viện trong các lĩnh vực liên quan
                    tới kinh tế và quản lý.<br>
                    Cụ thể các vấn đề về: Quản lý sản xuất - Quản lý nhân lực - Kinh tế vận hành hệ thống, tiết kiệm
                    năng lượng
                    - Marketing
                    - Quản lý tài chính doanh nghiệp
                    - Kinh tế vĩ mô</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-school fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="#">
                        <h4 class="my-3" style="color: black;">Sản phẩm nghiên cứu</h4>
                    </a>
                </div>
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-chart-area fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="#">
                        <h4 class="my-3" style="color: black;">Lĩnh vực nghiên cứu</h4>
                    </a>
                </div>
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-book fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="#">
                        <h4 class="my-3" style="color: black;">Đề tài nghiên cứu</h4>
                    </a>
                </div>
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-users fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="#">
                        <h4 class="my-3" style="color: black;">Hợp tác - Liên kết</h4>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Bộ môn - Trung tâm-->
    <section class="page-section bg-light" id="bomon">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Bộ môn - Trung tâm</h2>
                <h3 class="section-subheading text-muted">Viện Kinh tế và Quản lý hiện có 66 cán bộ giảng dạy và 6 cán
                    bộ phục vụ giảng dạy,
                    là những người hết lòng với công việc và có chuyên môn vững vàng trong các lĩnh vực tài chính,
                    kinh tế năng lượng, kinh tế học, kế toán, quản trị sản xuất và marketing.<br><br>
                    <span><a href="{{asset('bo-mon-trung-tam')}}" style="color: black;">Xem chi tiết</a>
                </h3></span>
            </div>
            <div class="card-deck">
                <div class="col-sm-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('/index/assets/img/1.jpg')}}"
                            style="width: auto; height:100px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size:14px; text-align: center">Bộ môn<br> KHQL và Luật
                            </h5>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Chi tiết
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" href="#">Giới thiệu chung</a></li>
                                        <li><a class="dropdown-item" href="#">Cán bộ và giảng viên</a></li>
                                        <li><a class="dropdown-item" href="#">Các hướng nghiên cứu</a></li>
                                        <li><a class="dropdown-item" href="#">Các công trình khoa học</a></li>
                                        <li><a class="dropdown-item" href="#">Các học phần đảm nhận</a></li>
                                        <li><a class="dropdown-item" href="#">Cơ sở vật chất</a></li>
                                        <li><a class="dropdown-item" href="#">Sách đã xuất bản</a></li>
                                    </ul>
                                </div>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('/index/assets/img/2.jpg')}}"
                            style="width: auto; height:100px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size:14px; text-align: center">Bộ môn<br> Kinh tế công
                                nghiệp</h5>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Chi tiết
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" href="#">Giới thiệu chung</a></li>
                                        <li><a class="dropdown-item" href="#">Cán bộ và giảng viên</a></li>
                                        <li><a class="dropdown-item" href="#">Các hướng nghiên cứu</a></li>
                                        <li><a class="dropdown-item" href="#">Các công trình khoa học</a></li>
                                        <li><a class="dropdown-item" href="#">Các học phần đảm nhận</a></li>
                                        <li><a class="dropdown-item" href="#">Cơ sở vật chất</a></li>
                                        <li><a class="dropdown-item" href="#">Sách đã xuất bản</a></li>
                                    </ul>
                                </div>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('/index/assets/img/3.jpg')}}"
                            style="width: auto; height:100px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size:14px; text-align: center">Bộ môn<br> Kinh tế học
                            </h5>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Chi tiết
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" href="#">Giới thiệu chung</a></li>
                                        <li><a class="dropdown-item" href="#">Cán bộ và giảng viên</a></li>
                                        <li><a class="dropdown-item" href="#">Các hướng nghiên cứu</a></li>
                                        <li><a class="dropdown-item" href="#">Các công trình khoa học</a></li>
                                        <li><a class="dropdown-item" href="#">Các học phần đảm nhận</a></li>
                                        <li><a class="dropdown-item" href="#">Cơ sở vật chất</a></li>
                                        <li><a class="dropdown-item" href="#">Sách đã xuất bản</a></li>
                                    </ul>
                                </div>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('/index/assets/img/4.jpg')}}"
                            style="width: auto; height:100px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size:14px; text-align: center">Bộ môn<br> Quản lý công
                                nghiệp</h5>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Chi tiết
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" href="#">Giới thiệu chung</a></li>
                                        <li><a class="dropdown-item" href="#">Cán bộ và giảng viên</a></li>
                                        <li><a class="dropdown-item" href="#">Các hướng nghiên cứu</a></li>
                                        <li><a class="dropdown-item" href="#">Các công trình khoa học</a></li>
                                        <li><a class="dropdown-item" href="#">Các học phần đảm nhận</a></li>
                                        <li><a class="dropdown-item" href="#">Cơ sở vật chất</a></li>
                                        <li><a class="dropdown-item" href="#">Sách đã xuất bản</a></li>
                                    </ul>
                                </div>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-deck">
                <div class="col-sm-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('/index/assets/img/5.jpg')}}"
                            style="width: auto; height:100px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size:14px; text-align: center">Bộ môn<br> Quản lý tài
                                chính</h5>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Chi tiết
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" href="#">Giới thiệu chung</a></li>
                                        <li><a class="dropdown-item" href="#">Cán bộ và giảng viên</a></li>
                                        <li><a class="dropdown-item" href="#">Các hướng nghiên cứu</a></li>
                                        <li><a class="dropdown-item" href="#">Các công trình khoa học</a></li>
                                        <li><a class="dropdown-item" href="#">Các học phần đảm nhận</a></li>
                                        <li><a class="dropdown-item" href="#">Cơ sở vật chất</a></li>
                                        <li><a class="dropdown-item" href="#">Sách đã xuất bản</a></li>
                                    </ul>
                                </div>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('/index/assets/img/6.jpg')}}"
                            style="width: auto; height:100px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size:14px; text-align: center">Bộ môn<br> Quản trị kinh
                                doanh</h5>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Chi tiết
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" href="#">Giới thiệu chung</a></li>
                                        <li><a class="dropdown-item" href="#">Cán bộ và giảng viên</a></li>
                                        <li><a class="dropdown-item" href="#">Các hướng nghiên cứu</a></li>
                                        <li><a class="dropdown-item" href="#">Các công trình khoa học</a></li>
                                        <li><a class="dropdown-item" href="#">Các học phần đảm nhận</a></li>
                                        <li><a class="dropdown-item" href="#">Cơ sở vật chất</a></li>
                                        <li><a class="dropdown-item" href="#">Sách đã xuất bản</a></li>
                                    </ul>
                                </div>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('/index/assets/img/7.jpg')}}"
                            style="width: auto; height:100px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size:14px; text-align: center">Trung tâm Nghiên cứu KT&QL
                            </h5>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Chi tiết
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" href="#">Giới thiệu chung</a></li>
                                        <li><a class="dropdown-item" href="#">Cán bộ và giảng viên</a></li>
                                        <li><a class="dropdown-item" href="#">Các hướng nghiên cứu</a></li>
                                        <li><a class="dropdown-item" href="#">Các công trình khoa học</a></li>
                                        <li><a class="dropdown-item" href="#">Các học phần đảm nhận</a></li>
                                        <li><a class="dropdown-item" href="#">Cơ sở vật chất</a></li>
                                        <li><a class="dropdown-item" href="#">Sách đã xuất bản</a></li>
                                    </ul>
                                </div>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Học sinh - Sinh viên-->
    <section class="page-section" id="sinhvien">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Học sinh - Sinh viên</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{asset('/index/assets/img/sv5.jpg')}}" alt="" />
                        <h4>Ban cố vấn học tập</h4>
                        <a href="#">
                            <p class="text-muted">Xem chi tiết</p>
                        </a>
                        <!-- <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{asset('/index/assets/img/sv4.jpg')}}" alt="" />
                        <h4>Ban chấp hành LCĐ</h4>
                        <a href="#">
                            <p class="text-muted">Xem chi tiết</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{asset('/index/assets/img/sv3.jpg')}}" alt="" />
                        <h4>Ban chấp hành LCH</h4>
                        <a href="#">
                            <p class="text-muted">Xem chi tiết</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{asset('/index/assets/img/sv2.jpg')}}" alt="" />
                        <h4>Các câu lạc bộ</h4>
                        <a class="text-muted" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Xem chi tiết
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">CLB Bạn yêu sách SEM</a></li>
                            <li><a class="dropdown-item" href="#">CLB Nhà kinh tế trẻ SEM</a></li>
                            <li><a class="dropdown-item" href="#">CLB Kỹ năng kinh doanh SEM</a></li>
                        </ul>
                        <!-- <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{asset('/index/assets/img/sv1.jpg')}}" alt="" />
                        <h4>Nghiên cứu khoa học sinh viên</h4>
                        <a href="#">
                            <p class="text-muted">Xem chi tiết</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque,
                        laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div> -->
        </div>
    </section>
    <!-- Clients-->
    <!-- <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/envato.jpg" alt="" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/designmodo.jpg"
                            alt="" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/themeforest.jpg"
                            alt="" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/creative-market.jpg"
                            alt="" /></a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Contact-->
    @if(Auth::check())
    <section class="page-section bg-light" id="dangxuat">
        <div class="container">
            <div class="text-center">
                <h3 class="section-heading text-uppercase">Viện Kinh tế và Quản lý</h3>
                <div><a class="btn btn-secondary" onclick="return confirm('Bạn muốn đăng xuất?')" href="logout"
                        role="button">Đăng xuất</a></div><br><br>
                <img style="width: 100px; height: 70px;" src="{{asset('/index/assets/img/logo_sem.PNG')}}" />
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
            </div><br>
        </div>
    </section>
    @else
    <section class="page-section bg-light" id="dangnhap">
        <div class="container">
            <div class="text-center">
                <h3 class="section-heading text-uppercase">Viện Kinh tế và Quản lý</h3>
                <div><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#loginModal">Đăng
                        nhập</button></div><br><br>
                <img style="width: 100px; height: 70px;" src="{{asset('/index/assets/img/logo_sem.PNG')}}" />
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
            </div><br>
            <!-- <form id="contactForm" name="sentMessage" novalidate="novalidate">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="Your Name *"
                                required="required" data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="Your Email *"
                                required="required"
                                data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *"
                                required="required"
                                data-validation-required-message="Please enter your phone number." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" placeholder="Your Message *" required="required"
                                data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div id="success"></div>
                    <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send
                        Message</button>
                </div>
            </form> -->
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
                        <a style="color: aliceblue;" href="{{asset('trang-chu')}}">Trang chủ</a>
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
    <!-- Contact form JS-->
    <script src="{{asset('/index/assets/mail/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('/index/assets/mail/contact_me.js')}}"></script>
    <!-- Core theme JS-->
    <script src="{{asset('/index/js/scripts.js')}}"></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
</body>

</html>