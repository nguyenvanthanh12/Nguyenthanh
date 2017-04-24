<div class="quangcao">  <!-- Quảng cáo -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
      <!-- Indicators -->
      

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <?php $slide1 = DB::table('ts_quangcao')->where('ViTri',0)->orderBy('id','DESC')->first(); ?>
        <a href="{{ isset($slide1->url) ? $slide1->url : '' }}" class="item active">
          <img src="{!! asset('public/upload/quangcao/'.$slide1->Anh) !!}" alt="Chania" width="460" height="345">
          
        </a>
        <?php $slide2 = DB::table('ts_quangcao')->where('ViTri',0)->orderBy('id','DESC')->skip(1)->take(4)->get(); ?>
        @foreach($slide2 as $item)
        <a href="{{ isset($slide1->url) ? $slide1->url : '' }}" class="item">
          <img src="{!! asset('public/upload/quangcao/'.$item->Anh) !!}" alt="Chania" width="460" height="345">
          
        </a>
      @endforeach
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
<!-- end quảng cáo -->