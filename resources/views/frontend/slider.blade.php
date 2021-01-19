<!-- Slider -->
<div id="slider">
    <div class="slides">
    @foreach($slide as $sl)
        <div class="slider">
            <div class="legend"></div>
            <div class="content">
                <div class="content-txt">
                    <!-- <h1>Lorem ipsum dolor</h1> -->
                    <h2>{!! $sl->trichdan !!}</h2>
                </div>
            </div>
            <div class="image">
                <img src="/upload/slide/{{$sl->anh}}">
            </div>
        </div>
    @endforeach
    </div>
    <div class="switch">
        <ul>
            <li>
                <div class="on"></div>
            </li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</div>
