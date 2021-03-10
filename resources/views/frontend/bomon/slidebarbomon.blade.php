<div class="col-md-1">
</div>
<!-- Sidebar -->
<div class="col-md-3">
    <!-- Danh mục -->
    <div class="card my-3" style="font-size: 13px;">
        <div class="card" style="width: 20rem;">
            <div class="card-header">
                <b>BỘ MÔN - TRUNG TÂM</b>
            </div>
            <ul class="list-group list-group-flush" style="background: #efefef; border-top: 3px groove #003366;"><br>
                <div class="dropdown" style="font-size: 13px;">
                    <a class="nav-link" style="color: #000; font-size:14px" href="{{asset('bo-mon-trung-tam')}}">Giới
                        thiệu</a>
                    <hr style=" groove #919191; border-top: 1px groove #003366;">
                </div>
                @foreach($bomon as $ct)
                <div class="dropdown">
                    <a style="color: #000" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{$ct->tenbomon}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a style="color: #000" class="dropdown-item"
                            href="{{asset('gioi-thieu-chung4')}}/{{$ct->id}}">Giới
                            thiệu</a>
                        <a style="color: #000" class="dropdown-item"
                            href="{{asset('can-bo-giang-vien')}}/{{$ct->id}}">Cán bộ và
                            giảng viên</a>
                        <a style="color: #000" class="dropdown-item"
                            href="{{asset('huong-nghien-cuu')}}/{{$ct->id}}">Các hướng
                            nghiên cứu</a>
                        <!-- <a style="color: #000" class="dropdown-item"
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
                            xuất bản</a> -->
                    </div>
                    <hr style=" groove #919191; border-top: 1px groove #003366;">
                </div>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- <img class="img-fluid rounded" src="{{asset('index/assets/img/bk8.jpg')}}" alt=""> -->
    <!-- Side Widget -->
    <!-- <div class="card my-4" style="font-size: 13px;">
        <h5 class="card-header">Side Widget</h5>
        <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature
            the new Bootstrap 4 card containers!
        </div>
    </div> -->
</div>