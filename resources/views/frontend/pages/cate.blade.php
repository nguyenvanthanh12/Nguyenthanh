@extends('frontend.master')
@section('content')

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
    <div class="title-sidebar">Tìm kiếm nâng cao</div>
    <div class="ct-sidebar">
      <h4>Gía</h4>
      <ul>
        <li><a href="">0 <small><u>đ</u></small> - 8.000.000 <small><u>đ</u></small></a></li>
        <li><a href="">8.000.000 <small><u>đ</u></small> - 15.000.000 <small><u>đ</u></small></a></li>
        <li><a href="">15.000.000 <small><u>đ</u></small> - 25.000.000 <small><u>đ</u></small></a></li>
        <li><a href="">Trên 25.000.000 <small><u>đ</u></small></a></li>
      </ul>
    </div>
    <div class="ct-sidebar">
      <h4>CPU</h4>
      <ul>
        <li><a href="">Intel Core i3</a></li>
        <li><a href="">Intel Core i5</a></li>
        <li><a href="">Intel Core i7</a></li>
        <li><a href="">Intel Pentium</a></li>
        <li><a href="">Intel Cleron</a></li>
        <li><a href="">Intel Core M</a></li>
      </ul>
    </div>
    <div class="ct-sidebar">
      <h4>RAM</h4>
      <ul>
        <li><a href="">2G</a></li>
        <li><a href="">4G</a></li>
        <li><a href="">8G</a></li>
        <li><a href="">16G</a></li>
        <li><a href="">32G</a></li>
      </ul>
    </div>
    <div class="ct-sidebar">
      <h4>Loại ổ cứng</h4>
      <ul>
        <li><a href="">HDD</a></li>
        <li><a href="">SSD</a></li>
      </ul>
    </div>
    <div class="ct-sidebar">
      <h4>Kích thước màn hình</h4>
      <ul>
        <li><a href="">11 inch</a></li>
        <li><a href="">12 inch</a></li>
        <li><a href="">13 inch</a></li>
        <li><a href="">14 inch</a></li>
        <li><a href="">15 inch</a></li>
        <li><a href="">17 inch</a></li>
      </ul>
    </div>
    <div class="ct-sidebar">
      <h4>VGA Card</h4>
      <ul>
        <li><a href="">Intel HD Graphic</a></li>
        <li><a href="">NVIDVA Geforce GTX</a></li>
        <li><a href="">Intel Iris</a></li>
        <li><a href="">NVIDVA Geforce</a></li>
        <li><a href="">NVIDVA Quadro</a></li>
        <li><a href="">AMD Radeon R5</a></li>
        <li><a href="">AMD Radeon R7</a></li>
      </ul>
    </div>
  </div>
  <!-- end bộ lọc sidebar -->
  <!-- Liệt kê sản phẩm -->
  
  <div class="col-md-9 list-product">
    <div class="title-list">Laptop hãng Dell (200)</div>
    <div class="list-ct">
    @if(count($product_cate) >0 )
    <!-- sản phẩm -->
      @foreach($product_cate as $item)
      <div class="product-item">
        <a href="{!! URL('chi-tiet-san-pham/'.$item->id.'/'.$item->TenKhongDau) !!}">
          <img src="{!! asset('public/upload/product/'.$item->AnhChinh) !!}" class="img-responsive" width="175px;" />
          <span class="title-item">{!! $item->TenSP !!}</span>
          <p class="price-sale">{!! number_format($item->Gia,0,',','.') !!}&nbsp;đ
            <span class="label label-warning">-2%</span>
            <span class="price-regular">12.490.000&nbsp;đ</span>
          </p>
        </a>
      </div>
      @endforeach
    <!-- end sản phẩm -->
 @else
    <?php echo "khong co san pham"; ?>
  @endif
    
    <!-- ket thuc phan trang -->    
    </div>
  </div>
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
  <!-- kết thúc liệt kê -->
</div>
@endsection