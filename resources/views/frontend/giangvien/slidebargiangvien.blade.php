<!-- Sidebar -->
<div class="col-md-4">
    <!-- Danh mục -->
    <div class="card my-4" style="font-size: 13px;">
        <div class="card" style="width: 18rem;">
            <div class="card-header" style="background-color: #003a6a; color: #fff">
                Bộ môn - Trung tâm
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a style="color: #000" href="{{asset('bo-mon-trung-tam')}}">Bộ môn-Trung
                        tâm</a></li>
                @foreach($bmon as $ct)
                <div class="dropdown">
                    <a style="color: #000" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{$ct->tenbomon}}
                    </a>
                    <div class="dropdown-menu" style="font-size: 13px;" aria-labelledby="navbarDropdownMenuLink">
                        <a style="color: #000" class="dropdown-item"
                            href="{{asset('gioi-thieu-chung4')}}/{{$ct->id}}">Giới
                            thiệu chung</a>
                        <a style="color: #000" class="dropdown-item"
                            href="{{asset('can-bo-giang-vien')}}/{{$ct->id}}">Cán bộ và
                            giảng viên</a>
                        <a style="color: #000" class="dropdown-item"
                            href="{{asset('huong-nghien-cuu')}}/{{$ct->id}}">Các hướng
                            nghiên cứu</a>
                        <a style="color: #000" class="dropdown-item"
                            href="{{asset('cong-trinh-khoa-hoc')}}/{{$ct->id}}">Các
                            công trình khoa
                            học</a></li>
                        <a style="color: #000" class="dropdown-item"
                            href="{{asset('hoc-phan-dam-nhan')}}/{{$ct->id}}">Các học
                            phần đảm nhận</a>
                        <a style="color: #000" class="dropdown-item" href="{{asset('co-so-vat-chat')}}/{{$ct->id}}">Cơ
                            sở vật
                            chất</a>
                        <a style="color: #000" class="dropdown-item"
                            href="{{asset('sach-da-xuat-ban')}}/{{$ct->id}}">Sách đã
                            xuất bản</a>
                    </div>
                </div>
                @endforeach
            </ul>
        </div>
        <br>
        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{asset('index/assets/img/bk.jpg')}}" alt="">
        <!-- Post Content -->
        <!-- Side Widget -->
        <div class="card my-4" style="font-size: 13px;">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
                You can put anything you want inside of these side widgets. They are easy to use, and feature
                the new Bootstrap 4 card containers!
            </div>
        </div>
    </div>