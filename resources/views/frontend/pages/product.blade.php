@extends('frontend.master')
@section('content')

<!-- breadcrumb -->
<div class="khoangcach"></div>
<div class="khoangcach"></div>
<div class="brc">
  <ul class="breadcrumb container">
    <li><a href="{!! url('/') !!}">Trang chủ</a></li>
    <li>{{ $menu_cate->Ten }}</li>
    <li><a href="{!! url('loai-san-pham/'.$cate->id.'/'.$cate->Ten) !!}">{!! $cate->Ten !!}</a></li>
    <li class="active">{!! $product_detail->TenSP !!}</li>
  </ul>
</div>
<!-- end breadcrumb -->
<div class="container">
<div class="women_main">
  <!-- start content -->
      <div class="row single">
        <div class="col-md-9 det">
          <div class="single_left">
          <div class="grid images_3_of_2">
            <ul id="etalage">
              
              <li>
                <a href="optionallink.html">
                  <img class="etalage_thumb_image" src="{!! asset('public/upload/product/'.$product_detail->AnhChinh) !!}" class="img-responsive" />
                  <img class="etalage_source_image" src="{!! asset('public/upload/product/'.$product_detail->AnhChinh) !!}" class="img-responsive" title="" />
                </a>
              </li>
              @foreach($imgDetail as $item1)
              <li>
                <img class="etalage_thumb_image" src="{!! asset('public/upload/product/imgdetail/'.$item1->Ten) !!}" class="img-responsive" />
                <img class="etalage_source_image" src="{!! asset('public/upload/product/imgdetail/'.$item1->Ten) !!}" class="img-responsive" title="" />
              </li>
              @endforeach
            </ul>
             <div class="clearfix"></div>   
          </div>
          <div class="desc1 span_3_of_2">
          <h3>{!! $product_detail->TenSP !!}</h3>
          <span class="code">Thương hiệu: <i>{!! $cate->Ten !!}</i></span>
            <div class="price">
              <span class="text">Giá bán:</span>
              <span class="price-new">{!! number_format($product_detail->Gia) !!} ₫</span>
              <span class="price-old">$100.00</span> 
              <span class="price-tax">Tiết kiệm: $90.00</span><br>
            </div>
          <div class="thongso">
            <h4>Thông số sản phẩm :</h4>
              <div class="parameter">
                <ul style="list-style-image: url('{!! asset('public/img/icon_list.png') !!}');">
                  @if(count($paraDetail) > 0)
                  @foreach($paraDetail as $val)
                    <?php $para = DB::table('ts_thongso')->select('id','Ten')->where('id',$val->idTS)->first(); ?>
                  <li>{{ $para->Ten }}: {{ $val->ctTS }}</li>
                  @endforeach
                  @endif
                </ul>
              </div>
          </div>
          <div class="gio-hang">
            <a href="{{ url('mua-hang/'.$product_detail->id.'/'.$product_detail->TenKhongDau) }}" style="text-decoration: none;"><button class="btn btn-defaul"><i class="fa fa-shopping-cart fa-lg"></i>
              <span class="text" style="text-decoration: none;">Thêm vào giỏ hàng</span>
            </button></a>
          </div>
          <div class="event">
            <h4>Khuyến mại đi kèm :</h4>
            <ul>
              @if(count($DetailEvent) > 0)
              @foreach($DetailEvent as $value)
              <?php $event = DB::table('ts_spkhuyenmai')->select('id','Ten','anh')->first(); ?>
              <li>
                <img src="{!! asset('public/upload/khuyenmai/sanpham/'.$event->anh) !!}" alt="">
                <span class="label label-success">Tặng kèm</span>
                <p>{{ $event->Ten }}</p>
              </li>
              @endforeach
              @endif
            </ul>
          </div>
           </div>
                <div class="clearfix"></div>
               </div>
                <div class="single-bottom1">
          <h6>Mô tả sản phẩm</h6>
          <p class="prod-desc">{{ $product_detail->NoiDung }}</p>
        </div>
        @if(count($product_cate) >0)
        <div class="single-bottom2">
          <h6>Sản phẩm cùng loại</h6>
          @foreach($product_cate as $item2)
          <div class="product-item">
            <a href="{!! URL('chi-tiet-san-pham/'.$item2->id.'/'.$item2->TenKhongDau) !!}">
              <img src="{!! asset('public/upload/product/'.$item2->AnhChinh) !!}" class="img-responsive" width="175px;" />
              <span class="title-item">{!! $item2->TenSP !!}</span>
              <p class="price-sale">{!! number_format($item2->Gia,0,',','.') !!}&nbsp;đ
                <span class="label label-warning">-2%</span>
                <span class="price-regular">12.490.000&nbsp;đ</span>
              </p>
            </a>
          </div>
          @endforeach  
        </div>
        @endif
      </div> 
  <div class="col-md-3">
    <div class="w_sidebar">
    <section  class="sky-form">
          <h4>TechStore.vn</h4>
            <div class="row1 scroll-pane">
              <div class="col col-4">
                <ul class="list-sp" style="list-style-image: url('{!! asset('public/img/icon_list.png') !!}');">
                  <li><i class="fa fa-newspaper-o"></i>Hình thức bảo hành
                    <p>Hóa đơn VAT</p>
                  </li>
                  <li><i class="fa fa-check-square"></i>Thời gian bảo hành
                    <p>12 tháng tại TTBH Apple Việt Nam</p>
                  </li>
                  <li><i class="fa fa-phone"></i>HOTLINE: 1900 6035
                    <p>(1.000đ/phút, 8-21h cả T7, CN)</p>
                  </li>
                </ul>  
              </div>
            </div>
    </section>

  </div>
   </div>
       <div class="clearfix"></div>   
    </div>
  <!-- end content -->
</div>
</div>
@endsection