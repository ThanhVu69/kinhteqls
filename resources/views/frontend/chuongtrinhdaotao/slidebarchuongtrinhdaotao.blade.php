<!-- Sidebar -->
<div class="col-md-1">
</div>
<div class="col-md-3">
    <!-- Danh mục -->
    <div class="card my-3" style="font-size: 13px;">
        <div class="card" style="width: 21.5rem;">
            <div class="card-header">
                <b>CHƯƠNG TRÌNH ĐÀO TẠO</b>
            </div>
            <ul class="list-group list-group-flush" style=" border-top: 3px groove #003366;">
                <li class="list-group-item"><a style="color: #000" href="{{asset('gioi-thieu-chung1')}}">Giới
                        thiệu</a></li>
                @foreach($daotaodaihoc as $dt)
                <li class="list-group-item">
                    <a style="color: #000" href="{{$dt->bieudokehoach}}">Biểu đồ kế hoạch</a>
                </li>
                @endforeach

                @foreach($chuongtrinhdaotao as $ct)
                <div class="dropdown" style="font-size: 13px;">
                    <a style="color: #000" style="font-size: 13px;" class="nav-link"
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
                </div>
                @endforeach
            </ul>
        </div>
    </div>
    <hr>
</div>