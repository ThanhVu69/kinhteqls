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