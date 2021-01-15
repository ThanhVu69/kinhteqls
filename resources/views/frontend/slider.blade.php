<link href="{{asset('/index/css/s.css')}}" rel="stylesheet" />
<!-- Slider -->
<header class="masthead">
        <div>
            <div class="container-all">
                <!-- <input type="radio" id="1" name="image-slide" hidden />
                <input type="radio" id="2" name="image-slide" hidden />
                <input type="radio" id="3" name="image-slide" hidden />
                <input type="radio" id="4" name="image-slide" hidden />
                <input type="radio" id="5" name="image-slide" hidden /> -->
                <div class="slide">
                    <div class="item-slide">
                        <img 
                        src="{{asset('index/assets/img/Slide.gif')}}">
                    </div>
                    @foreach($slide as $sl)
                    <div class="item-slide">
                        <img 
                         src="/upload/slide/{{$sl->anh}}">
                    </div>
                    @endforeach
                </div>
                <div class="pagination">
                    <label class="pagination-item" for="1">
                        <img 
                        src="{{asset('index/assets/img/Slide.gif')}}">
                    </label>
                    @foreach($slide as $sl)
                    <label class="pagination-item" for="2">
                        <img 
                        src="/upload/slide/{{$sl->anh}}">
                    </label>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img style="width:1000px; height:350px"
                            src="{{asset('index/assets/img/FinalVideo_1609150916.617998.gif')}}" class="d-block w-1"
                            alt="...">
                    </div>
                    @foreach($slide as $sl)
                    <div class="carousel-item">
                        <img style="width:1000px; height:350px" src="/upload/slide/{{$sl->anh}}" class="d-block w-1"
                            alt="...">
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div> -->
    </header>