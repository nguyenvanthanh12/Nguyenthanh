@extends('frontend.master')

@section('content')

<!-- Quảng cáo -->

@include('frontend.blocks.slide')
  
<!-- end quảng cáo -->
<!-- Begin content -->
<div class="container">
  <div class="bl-quangcao col-md-12">
    <img src="public/img/quangcao/blqc1.png" />
    <img src="public/img/quangcao/blqc2.jpg" class="img-responsive" />
  </div>
<!-- end quảng cáo -->
<?php
  $menu_level_1 = DB::table('ts_loaisanpham')->where('parent_id',0)->get();
?>
  @foreach($menu_level_1 as $item1)
  <div class="col-md-12 wrapper">
  <!-- *****   Breadcrumb  **** -->
    <div class="home-header row"> 
      <p class="col-md-3">{!! $item1->Ten !!}</p>
      <ul class="col-md-9 nav nav-tabs" id="test">
        <?php
          $menu_level_2 = DB::table('ts_loaisanpham')->where('parent_id',$item1->id)->get();
        ?>
        @foreach($menu_level_2 as $item2)
        <li><a data-toggle="tab" href="#{{ $item2->Ten }}">{!! $item2->Ten !!}</a></li>
        @endforeach
      </ul>
    </div>

      <!-- end breadcrumb -->
    <div class="col-md-12 tab-content sanpham">
      <?php
        $menu_level_2 = DB::table('ts_loaisanpham')->where('parent_id',$item1->id)->get();
      ?>
      @foreach($menu_level_2 as $item2)
      <div id="{{ $item2->Ten }}" class="tab-pane fade">
        <?php 
          $product = DB::table('ts_sanpham')->where('idLSP',$item2->id)->orderBy('id','DESC')->paginate(4);
        ?>
        @if(count($product) >0 )
        @foreach($product as $item)
          <div class="grid1_of_4">
            <div class="content_box"><a href="{!! URL('chi-tiet-san-pham/'.$item->id.'/'.$item->TenKhongDau) !!}">
                 <img src="{!! asset('public/upload/product/'.$item->AnhChinh) !!}" class="img-responsive" width="230px;" />
                </a>
                <h4><a href="{!! URL('chi-tiet-san-pham/'.$item->id.'/'.$item->TenKhongDau) !!}"> {!! $item->TenSP !!}</a></h4>
                <p>It is a long established fact that</p>
              <div class="grid_1 simpleCart_shelfItem">
              
              <div class="item_add"><span class="item_price"><h6>{!! number_format($item->Gia,0,',','.') !!}&nbsp;đ</h6></span></div>
              <div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
             </div>
            </div>
          </div>
        @endforeach
        @else
        <h4>Xin lỗi ! Loại mặt hàng này hiện đang hết hàng</h4>
        @endif
      </div>
      @endforeach
    </div>
  </div>
  @endforeach
</div>
@endsection

  