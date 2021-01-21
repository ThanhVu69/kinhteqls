<section class="page-section bg-light" id="gioithieuchung">
        <div class="container-fluid" style="background-color: #fcf9e2">
            <div class="text-center">
                <br><br>
                <h2 class="section-heading text-uppercase">Giới thiệu chung</h2>
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
                                <h3 class="text-uppercase" style="color: #fff">Thư ngỏ</h3><br>
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
                                <h3 class="text-uppercase" style="color:#fff">Lịch sử hình thành và phát triển</h3><br>
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
                                <h3 class="text-uppercase" style="color:#fff">Cơ cấu tổ chức</h3><br>
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