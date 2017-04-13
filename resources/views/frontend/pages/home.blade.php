@extends('frontend.master')
@section('description','Trang chủ')
@section('content')
<div id="maincontainer">
<!-- Slider Start-->
  
@include('frontend.blocks.slide')

<!-- Slider End-->
  
<!-- Section Start-->

@include('frontend.blocks.advertisement')

<!-- Section End-->
<?php 
  $cate = DB::table('ts_loaisanpham')->where('parent_id',0)->get();
?>
@foreach($cate as $item1)
<section id="featured" class="row mt40">
  <div class="container">
    <h1 class="heading1"><span class="maintext">{!! $item1->Ten !!}</span><span class="subtext"> See Our Most featured Products</span></h1>
    <ul class="thumbnails">
      @foreach($product as $item)
      <li class="span3">
        <a class="prdocutname" href="{!! URL('chi-tiet-san-pham/'.$item->id.'/'.$item->TenKhongDau.'.html') !!}" style="display: block;min-height: 40px">{!! $item->TenSP !!}</a>
        <div class="thumbnail">
          <span class="sale tooltip-test">Sale</span>
          <a href="{!! URL('chi-tiet-san-pham/'.$item->id.'/'.$item->TenKhongDau.'.html') !!}" style="display:block;min-height: 270px;"><img alt="" src="{!! asset('public/upload/product/'.$item->AnhChinh) !!}"  class="img-responsive"></a>
          <div class="pricetag">
            <span class="spiral"></span><a href="#" class="productcart">Mua ngay</a>
            <div class="price">
              <div class="pricenew">{!! number_format($item->Gia,0,',','.') !!}đ</div>
              <div class="priceold">$5000.00</div>
            </div>
          </div>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
</section>
@endforeach

@endsection