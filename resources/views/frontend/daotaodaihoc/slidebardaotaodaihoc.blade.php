<link href="{{asset('index/css/slidebar.css')}}" rel="stylesheet">
<!-- Sidebar -->
<div class="col-md-3">
    <!-- Danh mục -->
    <div class="slidebar">
        <div class="card my-3" style="font-size: 13px;">
            <div class="card" style="width: 21.5rem;">
                <div class="card-header">
                    <b>ĐÀO TẠO ĐẠI HỌC</b>
                </div>
                <ul class="list-group list-group-flush" style=" background: #efefef;border-top: 3px groove #003366;">
                    <br>
                    <!-- <li class="list-group-item"><a style="color: #000" href="{{asset('gioi-thieu-chung1')}}">Giới
                        thiệu chung</a></li> -->
                    @foreach($daotaodaihoc as $dt)
                    <div class="dropdown" style="font-size: 13px;">
                        <a style="color: #000; font-size: 13px;" href="{{$dt->bieudokehoach}}" class="nav-link ">Biểu
                            đồ kế hoạch</a>
                        <hr style=" groove #919191; border-top: 1px groove #003366;">
                    </div>
                    @endforeach
                    @foreach($chuongtrinhdaotao as $ct)
                    <div class="dropdown" style="font-size: 13px;">
                        <a style="color: #000" style="font-size: 13px; " class="nav-link "
                            href="{{asset('chuan-dau-ra')}}/{{$ct->id}}" aria-expanded="false">
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
                <a href="{{asset('dao-tao-sau-dai-hoc')}}" style="color: #003366;">
                <img src="{{asset('index/assets/img/ctdt.jpg')}}" class="anhphu" alt="...">
                <div class="tieude"><b>ĐÀO TẠO SAU ĐẠI HỌC<b></div>
                </a>
            </div>
        </div>
        <div class="card my-3">
            <div class="card">
                <a href="{{asset('ban-chap-hanh')}}" style="color: #003366;">
                <img src="{{asset('index/assets/img/banchaphanh.jpg')}}" class="anhphu" alt="...">
                <div class="tieude"><b>BAN CHẤP HÀNH LCĐ - LCH<b></div>
                </a>
            </div>
        </div>
    </div>
</div>