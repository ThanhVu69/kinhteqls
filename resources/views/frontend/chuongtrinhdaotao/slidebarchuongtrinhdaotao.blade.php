<link href="{{asset('index/css/slidebar.css')}}" rel="stylesheet">
<!-- Sidebar -->
<div class="col-md-3">
    <!-- Danh mục -->
    <div class="slidebar">
        <div class="card my-3">
            <div class="card">
                <div class="card-header">
                    <b>CHƯƠNG TRÌNH ĐÀO TẠO</b>
                </div>
                <ul class="list-group list-group-flush" style="background: #efefef; border-top: 3px groove #003366;">
                    <br>
                    <div class="dropdown" style="font-size: 13px;">
                        <a class="nav-link " style="color: #000" href="{{asset('gioi-thieu-chung1')}}">Giới
                            thiệu</a>
                        <hr style=" groove #919191; border-top: 1px groove #003366;">
                    </div>
                    @foreach($daotaodaihoc as $dt)
                    <div class="dropdown" style="font-size: 13px;">
                        <a class="nav-link " style="color: #000" href="{{$dt->bieudokehoach}}">Biểu đồ kế hoạch</a>
                        <hr style=" groove #919191; border-top: 1px groove #003366;">
                    </div>
                    @endforeach

                    @foreach($chuongtrinhdaotao as $ct)
                    <div class="dropdown">
                        <a style="color: #000" class="nav-link"
                            href="{{asset('chuan-dau-ra')}}/{{$ct->id}}" aria-haspopup="true" aria-expanded="false">
                            {{$ct->tenchuongtrinh}}
                        </a>
                        <!-- <div class="dropdown-menu" style="font-size: 13px;" aria-labelledby="navbarDropdownMenuLink">
                        <a style="color: #000" class="dropdown-item" href="{{asset('chuan-dau-ra')}}/{{$ct->id}}">Chuẩn
                            đầu ra</a>
                        <a style="color: #000" class="dropdown-item"
                            href="{{asset('quy-dinh-dao-tao')}}/{{$ct->id}}">Quy định đào tạo</a>
                        <a style="color: #000" class="dropdown-item" href="{{$ct->danhmucchuongtrinh}}">Danh mục chương
                            trình</a>
                    </div> -->
                        <hr style=" groove #919191; border-top: 1px groove #003366;">
                    </div>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="card my-3">
            <div class="card">
                <a href="{{asset('cau-lac-bo')}}" style="color: #003366;">
                <img src="{{asset('index/assets/img/caulacbo.jpg')}}" class="anhphu" alt="...">
                <div class="tieude"><b>CÁC CÂU LẠC BỘ<b></div>
                </a>
            </div>
        </div>
        <div class="card my-3">
            <div class="card">
                <a href="{{asset('thuc-tap-sinh')}}" style="color: #003366;">
                <img src="{{asset('index/assets/img/thuctapsinh.jpg')}}" class="anhphu" alt="...">
                <div class="tieude">THỰC TẬP SINH</div>
                </a>
            </div>
        </div>
    </div>
</div>