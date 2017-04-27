@extends('frontend.master')
@section('content')
<style type="text/css" media="screen">
  .phantrang { width: 100%; min-height: 35px; }  
  .clear {
    clear: both;
  }
</style>
<!-- breadcrumb -->
<div class="khoangcach"></div>
<div class="khoangcach"></div>
<div class="brc">
  <ul class="breadcrumb container">
    <li><a href="{!! url('/') !!}">Trang chủ</a></li>
    <li>{!! $menu_cate->Ten !!}</li>
    <li class="active">{!! $cate->Ten !!}</li>
  </ul>
</div>
<!-- end breadcrumb -->
<div class="container">
  <!-- Bộ lọc sidebar -->
  <div class="col-md-3 search-sidebar">
    <div class="title-sidebar"></div>
    <div class="ct-sidebar">
      <h4 style="padding: 10px;">{!! $menu_cate->Ten !!}</h4>
      <?php $menu_cate2 = DB::table('ts_loaisanpham')->select('id','Ten','TenKhongDau','parent_id')->where('parent_id',$menu_cate->id)->get(); ?>
      <ul style="">
        @foreach($menu_cate2 as $menu_cate2)
        <li><a href="{!! URL('loai-san-pham/'.$menu_cate2->id.'/'.$menu_cate2->TenKhongDau) !!}">{{ $menu_cate2->Ten }}</a></li>
        @endforeach
      </ul>
    </div>
    <div class="ct-sidebar">
      <h4 style="padding: 10px;">Gía</h4>
      <ul>
        <li><a data-toggle="tab" href="#gia1">0 <small><u>đ</u></small> - 8.000.000 <small><u>đ</u></small></a></li>
        <li><a data-toggle="tab" href="#gia2">8.000.000 <small><u>đ</u></small> - 15.000.000 <small><u>đ</u></small></a></li>
        <li><a data-toggle="tab" href="#gia3">15.000.000 <small><u>đ</u></small> - 25.000.000 <small><u>đ</u></small></a></li>
        <li><a data-toggle="tab" href="#gia4">Trên 25.000.000 <small><u>đ</u></small></a></li>
      </ul>
    </div>
    
    <div class="ct-sidebar">
      <h4 style="padding: 10px;">Sản phẩm mới nhất</h4>
      <?php $product_news = DB::table('ts_sanpham')->select('id','TenSP','TenKhongDau','Gia','AnhChinh','GiamGia','idLSP')->where('idLSP',$cate->id)->orderBy('id','DESC')->take(4)->get(); ?>
      @if(count($product_news) >0 )
      @foreach($product_news as $product_news)
      <div style="margin-left: 15px;">
        <img src="{!! asset('public/upload/product/'.$product_news->AnhChinh) !!}" width="50px;" class="img-responsive" style="float: left; margin-right: 10px;">
        <a href="{!! URL('chi-tiet-san-pham/'.$product_news->id.'/'.$product_news->TenKhongDau) !!}">{!! $product_news->TenSP !!}</a>
        <p>{!! number_format($product_news->Gia - floor($product_news->Gia*$product_news->GiamGia/100),0,',','.') !!} &nbsp;đ</p>
      </div>
      <div style="clear: both;"></div>
      @endforeach
      @endif
    </div>
    
  </div>
  <!-- end bộ lọc sidebar -->
  <!-- Liệt kê sản phẩm -->
  
  <div class="col-md-9 list-product">
    <div class="title-list">Laptop hãng {!! $cate->Ten !!} ({!! count($product_cate) !!})</div>
    <div class="list-ct tab-content">
    @if(count($product_cate) >0 )
    <!-- sản phẩm -->
    <div class="tab-pane fade in active">
      @foreach($product_cate as $item)
      <div class="product-item" style="">
      <div class="border">
        <a href="{!! URL('chi-tiet-san-pham/'.$item->id.'/'.$item->TenKhongDau) !!}">
          <div style="height: 175px;"><img src="{!! asset('public/upload/product/'.$item->AnhChinh) !!}" class="img-responsive" width="175px;" /></div>
          <span class="title-item">{!! $item->TenSP !!}</span>
          <p class="price-sale">{!! number_format($item->Gia - floor($item->Gia*$item->GiamGia/100),0,',','.') !!}&nbsp;đ
            <span class="label label-warning">-{!! $item->GiamGia !!}%</span>
            <span class="price-regular" style="text-decoration: line-through;">{!! number_format($item->Gia,0,',','.') !!}&nbsp;đ</span>
          </p>
        </a>
      </div>
      </div>
      @endforeach
      <div class="clear"></div>
       <div class="phantrang">
          <ul class="pagination">
              @if($product_cate->currentPage() != 1)
              <li ><a href="{{ $product_cate->url($product_cate->currentPage() - 1) }}">&laquo;</a></li>
              @endif
              @for($i=1;$i <= $product_cate->lastPage();$i++)
              <li class="{{ ($product_cate->currentPage() == $i) ? 'active' : '' }}"><a href="{{ $product_cate->url($i) }}">{{ $i }}</a></li>
              @endfor
              @if($product_cate->currentPage() != $product_cate->lastPage())
              <li><a href="{{ $product_cate->url($product_cate->currentPage() + 1) }}">&raquo;</a></li>
              @endif
          </ul>
      </div>
    </div>

    <div id="gia1" class="tab-pane fade">
    @if(count($product_gia1) > 0)
      @foreach($product_gia1 as $item)
      <div class="product-item" style="">
      <div class="border">
        <a href="{!! URL('chi-tiet-san-pham/'.$item->id.'/'.$item->TenKhongDau) !!}">
          <img src="{!! asset('public/upload/product/'.$item->AnhChinh) !!}" class="img-responsive" width="175px;" />
          <span class="title-item">{!! $item->TenSP !!}</span>
          <p class="price-sale">{!! number_format($item->Gia - floor($item->Gia*$item->GiamGia/100),0,',','.') !!}&nbsp;đ
            <span class="label label-warning">-{!! $item->GiamGia !!}%</span>
            <span class="price-regular" style="text-decoration: line-through;">{!! number_format($item->Gia,0,',','.') !!}&nbsp;đ</span>
          </p>
        </a>
      </div>
      </div>
      @endforeach
      <div class="clear"></div>
       <div class="phantrang">
          <ul class="pagination">
              @if($product_gia1->currentPage() != 1)
              <li ><a href="{{ $product_gia1->url($product_gia1->currentPage() - 1) }}">&laquo;</a></li>
              @endif
              @for($i=1;$i <= $product_gia1->lastPage();$i++)
              <li class="{{ ($product_gia1->currentPage() == $i) ? 'active' : '' }}"><a href="{{ $product_gia1->url($i) }}">{{ $i }}</a></li>
              @endfor
              @if($product_gia1->currentPage() != $product_gia1->lastPage())
              <li><a href="{{ $product_gia1->url($product_gia1->currentPage() + 1) }}">&raquo;</a></li>
              @endif
          </ul>
      </div>
    @else
      Không có sản phẩm
    @endif
    </div>
    <div id="gia2" class="tab-pane fade">
      @if(count($product_gia2) > 0)
            @foreach($product_gia2 as $item)
            <div class="product-item" style="">
            <div class="border">
              <a href="{!! URL('chi-tiet-san-pham/'.$item->id.'/'.$item->TenKhongDau) !!}">
                <img src="{!! asset('public/upload/product/'.$item->AnhChinh) !!}" class="img-responsive" width="175px;" />
                <span class="title-item">{!! $item->TenSP !!}</span>
                <p class="price-sale">{!! number_format($item->Gia - floor($item->Gia*$item->GiamGia/100),0,',','.') !!}&nbsp;đ
                  <span class="label label-warning">-{!! $item->GiamGia !!}%</span>
                  <span class="price-regular" style="text-decoration: line-through;">{!! number_format($item->Gia,0,',','.') !!}&nbsp;đ</span>
                </p>
              </a>
            </div>
            </div>
            @endforeach
            <div class="clear"></div>
             <div class="phantrang">
                <ul class="pagination">
                    @if($product_gia2->currentPage() != 1)
                    <li ><a href="{{ $product_gia2->url($product_gia2->currentPage() - 1) }}">&laquo;</a></li>
                    @endif
                    @for($i=1;$i <= $product_gia2->lastPage();$i++)
                    <li class="{{ ($product_gia2->currentPage() == $i) ? 'active' : '' }}"><a href="{{ $product_gia2->url($i) }}">{{ $i }}</a></li>
                    @endfor
                    @if($product_gia2->currentPage() != $product_gia2->lastPage())
                    <li><a href="{{ $product_gia2->url($product_gia2->currentPage() + 1) }}">&raquo;</a></li>
                    @endif
                </ul>
            </div>
          @else
            Không có sản phẩm
          @endif
    </div>
    <div id="gia3" class="tab-pane fade">
      @if(count($product_gia3) > 0)
        @foreach($product_gia3 as $item)
        <div class="product-item" style="">
        <div class="border">
          <a href="{!! URL('chi-tiet-san-pham/'.$item->id.'/'.$item->TenKhongDau) !!}">
            <img src="{!! asset('public/upload/product/'.$item->AnhChinh) !!}" class="img-responsive" width="175px;" />
            <span class="title-item">{!! $item->TenSP !!}</span>
            <p class="price-sale">{!! number_format($item->Gia - floor($item->Gia*$item->GiamGia/100),0,',','.') !!}&nbsp;đ
              <span class="label label-warning">-{!! $item->GiamGia !!}%</span>
              <span class="price-regular" style="text-decoration: line-through;">{!! number_format($item->Gia,0,',','.') !!}&nbsp;đ</span>
            </p>
          </a>
        </div>
        </div>
        @endforeach
        <div class="clear"></div>
      <div class="phantrang">
        <ul class="pagination">
            @if($product_gia3->currentPage() != 1)
            <li ><a href="{{ $product_gia3->url($product_gia3->currentPage() - 1) }}">&laquo;</a></li>
            @endif
            @for($i=1;$i <= $product_gia3->lastPage();$i++)
            <li class="{{ ($product_gia3->currentPage() == $i) ? 'active' : '' }}"><a href="{{ $product_gia3->url($i) }}">{{ $i }}</a></li>
            @endfor
            @if($product_gia3->currentPage() != $product_gia3->lastPage())
            <li><a href="{{ $product_gia3->url($product_gia3->currentPage() + 1) }}">&raquo;</a></li>
            @endif
        </ul>
    </div>
      @else
        Không có sản phẩm
      @endif
    </div>
    <div id="gia4" class="tab-pane fade">
      @if(count($product_gia4) > 0)
      @foreach($product_gia4 as $item)
      <div class="product-item" style="">
      <div class="border">
        <a href="{!! URL('chi-tiet-san-pham/'.$item->id.'/'.$item->TenKhongDau) !!}">
          <img src="{!! asset('public/upload/product/'.$item->AnhChinh) !!}" class="img-responsive" width="175px;" />
          <span class="title-item">{!! $item->TenSP !!}</span>
          <p class="price-sale">{!! number_format($item->Gia - floor($item->Gia*$item->GiamGia/100),0,',','.') !!}&nbsp;đ
            <span class="label label-warning">-{!! $item->GiamGia !!}%</span>
            <span class="price-regular" style="text-decoration: line-through;">{!! number_format($item->Gia,0,',','.') !!}&nbsp;đ</span>
          </p>
        </a>
      </div>
      </div>
      @endforeach
      <div class="clear"></div>
        <div class="phantrang">
          <ul class="pagination">
              @if($product_gia4->currentPage() != 1)
              <li ><a href="{{ $product_gia4->url($product_gia4->currentPage() - 1) }}">&laquo;</a></li>
              @endif
              @for($i=1;$i <= $product_gia4->lastPage();$i++)
              <li class="{{ ($product_gia4->currentPage() == $i) ? 'active' : '' }}"><a href="{{ $product_gia4->url($i) }}">{{ $i }}</a></li>
              @endfor
              @if($product_gia4->currentPage() != $product_gia4->lastPage())
              <li><a href="{{ $product_gia4->url($product_gia4->currentPage() + 1) }}">&raquo;</a></li>
              @endif
          </ul>
      </div>
    @else
      Không có sản phẩm
    @endif
    </div>
      
    <!-- end sản phẩm -->
 @else
    <?php echo "khong co san pham"; ?>
  @endif
    
    <!-- ket thuc phan trang -->    
    </div>
  </div>
 
  <!-- kết thúc liệt kê -->
</div>
@endsection