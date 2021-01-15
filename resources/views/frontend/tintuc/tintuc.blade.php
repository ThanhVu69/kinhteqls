<link href="{{asset('/index/css/tintuc.css')}}" rel="stylesheet" />
<section class="page-section" id="tintuc">
    <br><br>
      <div class="container">
      <div class="row clearfix">
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="text-center">
                  <h2 class="section-heading text-uppercase">Tin tức</h2>
            </div>
      <div class="row clearfix">    
        @foreach($tintuc as $tt)
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="c">
                <div class="c-img"></div>
                <a href="{!! URL::to('tin-tuc-su-kien/'.$tt->url) !!}" class="c-link">
                    <div class="c-img-hovered" style="background-image:url('{{ asset('/upload/tintuc/'.$tt->hinhanh) }}')" title="Xem chi tiết">
                    </div>
                </a>
                <div class="c-info">
                    <div class="c-about">
                        <a class="c-tag tag-news">News</a>
                        <div class="c-time">{!! date('d-m-Y',strtotime($tt->ngay)) !!}</div>
                    </div>
                    <h1 class="c-title">{!! ($tt->tieude) !!}</h1>
                    <div class="c-creator">by <a href="">Tyler Platt</a></div>
                </div>
            </div>
         </div>
         @endforeach
      </div>
         <br>
        <div style="text-align:center"><a href="{!! URL::to('tin-tuc') !!}">Xem thêm</a></div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="text-center">
                  <h2 class="section-heading text-uppercase">Sự kiện</h2>
            </div>
         <div class="row clearfix">   
        @foreach($sukien as $sk)
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="c">
                <div class="c-img"></div>
                <a href="{!! URL::to('tin-tuc-su-kien/'.$sk->url) !!}" class="c-link">
                    <div class="c-img-hovered" style="background-image:url('{{ asset('/upload/tintuc/'.$sk->hinhanh) }}')" title="Xem chi tiết">
                    </div>
                </a>
                <div class="c-info">
                    <div class="c-about">
                        <a class="c-tag tag-events">EVENTS</a>
                        <div class="c-time">{!! date('d-m-Y',strtotime($sk->ngay)) !!}</div>
                    </div>
                    <h1 class="c-title">{!! ($sk->tieude) !!}</h1>
                     <div class="c-creator">by <a href="">Tyler Platt</a></div>
                </div>
            </div>
         </div>
         @endforeach
         </div>
         <br>
        <div style="text-align:center"><a href="{!! URL::to('su-kien') !!}">Xem thêm</a></div>
         </div>
         </div>
    </div>
    <br>
</section>