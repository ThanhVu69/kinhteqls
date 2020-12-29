<!-- Sidebar -->
<div class="col-md-4">
    <!-- Danh mục -->
    <div class="card my-4" style="font-size: 13px;">
        <div class="card" style="width: 21.5rem;">
            <div class="card-header" style="background-color: #003a6a; color: #fff">
                Đào tạo đại học
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a style="color: #000" href="{{asset('gioi-thieu-chung1')}}">Giới
                        thiệu chung</a></li>
                @foreach($daotaodaihoc as $dt)
                <li class="list-group-item"><a style="color: #000" href="{{$dt->bieudokehoach}}">Biểu đồ kế hoạch</a>
                </li>
                @endforeach

                @foreach($chuongtrinhdaotao as $ct)
                <div class="dropdown" style="font-size: 13px;">
                    <a style="color: #000" style="font-size: 13px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{$ct->tenchuongtrinh}}
                    </a>
                    <div class="dropdown-menu" style="font-size: 13px;" aria-labelledby="navbarDropdownMenuLink">
                        <a style="color: #000" class="dropdown-item" href="{{asset('chuan-dau-ra')}}/{{$ct->id}}">Chuẩn
                            đầu ra</a>
                        <a style="color: #000" class="dropdown-item"
                            href="{{asset('quy-dinh-dao-tao')}}/{{$ct->id}}">Quy định đào tạo</a>
                        <a style="color: #000" class="dropdown-item" href="{{$ct->danhmucchuongtrinh}}">Danh mục chương
                            trình</a>
                    </div>
                </div>
                @endforeach
            </ul>
        </div>
    </div>
    <hr>
    <img class="img-fluid rounded" src="{{asset('index/assets/img/bk7.jpeg')}}" alt="">
    <!-- Side Widget -->
    <div class="card my-4" style="font-size: 13px;">
        <h5 class="card-header">Side Widget</h5>
        <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature
            the new Bootstrap 4 card containers!
        </div>
    </div>
</div>