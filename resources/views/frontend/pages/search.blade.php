@extends('frontend.master')
@section('content')

<!-- breadcrumb -->
<div class="khoangcach"></div>
<div class="khoangcach"></div>
<div class="brc">
  <ul class="breadcrumb container">
    <li><a href="{!! url('/') !!}">Trang chủ</a></li>
    <li class="active">Tìm kiếm - {{ isset($tukhoa) ? $tukhoa : null }}</li>
  </ul>
</div>
<!-- end breadcrumb -->
<div class="container">
  <div class="col-md-12 sanpham">
      <div id="" class="tab-pane fade">
      <?php 
        if (isset($tukhoa)) {
          $product = DB::table('ts_sanpham')->select('id','TenSP','TenKhongDau','Gia','AnhChinh','idLSP')->where('TenSP','like',"%$tukhoa%")->paginate(12);
        }
      ?>
        @if(count($product) > 0)
          @foreach($product as $item)
          <div class="grid1_of_4">
            <div class="content_box"><a href="{!! URL('chi-tiet-san-pham/'.$item->id.'/'.$item->TenKhongDau) !!}">
                 <img src="{!! asset('public/upload/product/'.$item->AnhChinh) !!}" class="img-responsive" width="230px;" />
                </a>
                <h4><a href="{!! URL('chi-tiet-san-pham/'.$item->id.'/'.$item->TenKhongDau) !!}"> </a></h4>
              <div class="grid_1 simpleCart_shelfItem">
              
              <div class="item_add"><span class="item_price"><h6>{!! number_format($item->Gia,0,',','.') !!}&nbsp;đ</h6></span></div>
              <div class="item_add"><span class="item_price"><a href="{{ url('mua-hang/'.$item->id.'/'.$item->TenKhongDau) }}">Mua ngay</a></span></div>
             </div>
            </div>
          </div>
          @endforeach
         <div class="phantrang col-md-12">
         <div class="khoangcach"></div>
          <div class="khoangcach"></div>
            <ul class="pagination">
                @if($product->currentPage() != 1)
                <li ><a href="{{ $product->url($product->currentPage() - 1) }}">&laquo;</a></li>
                @endif
                @for($i=1;$i <= $product->lastPage();$i++)
                <li class="{{ ($product->currentPage() == $i) ? 'active' : '' }}"><a href="{{ $product->url($i) }}">{{ $i }}</a></li>
                @endfor
                @if($product->currentPage() != $product->lastPage())
                <li><a href="{{ $product->url($product->currentPage() + 1) }}">&raquo;</a></li>
                @endif
            </ul>
        </div>
        @else
        <h4>khong tim thay san pham ma ban can</h4>
        @endif
      </div>
    </div>
</div>
@endsection