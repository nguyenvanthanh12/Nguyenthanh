@extends('frontend.master')
@section('description','Loại sản phẩm')
@section('content')
<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb -->  
      <ul class="breadcrumb">
        <li>
          <a href="#">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Category</li>
      </ul>
      <div class="row">        
        <!-- Sidebar Start-->
        <aside class="span3">
         <!-- Category-->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Loại sản phẩm</span></h2>
            <ul class="nav nav-list categories">
              @foreach($menu_cate as $val)
              <li>
                <a href="{!! URL('loai-san-pham/'.$val->id.'/'.$val->TenKhongDau) !!}">{!! $val->Ten !!}</a>
              </li>
              @endforeach
            </ul>
          </div>
         <!--  Best Seller -->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Best Seller</span></h2>
            <ul class="bestseller">
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Women Accessories</span>
                <span class="price">$250</span>
              </li>
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
                <span class="price">$250</span>
              </li>
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
                <span class="price">$250</span>
              </li>
            </ul>
          </div>
          <!-- Latest Product -->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Sản phẩm mới</span></h2>
            <ul class="bestseller">
              @foreach($lastest as $lastest)
              <li>
                <img width="50" height="50" src="{!! asset('public/upload/product/'.$lastest->AnhChinh) !!}" alt="product" title="product">
                <a class="productname" href="{!! URL('chi-tiet-san-pham/'.$lastest->id.'/'.$lastest->TenKhongDau.'.html') !!}"> {!! $lastest->TenSP !!}</a>
                <span class="procategory">{!! $name_cate->Ten !!}</span>
                <span class="price">{!! $lastest->Gia !!}</span>
              </li>
              @endforeach
            </ul>
          </div>
          <!--  Must have -->  
          <div class="sidewidt">
          <h2 class="heading2"><span>Must have</span></h2>
          <div class="flexslider" id="mainslider">
            <ul class="slides">
              <li>
                <img src="img/product1.jpg" alt="" />
              </li>
              <li>
                <img src="img/product2.jpg" alt="" />
              </li>
            </ul>
          </div>
          </div>
        </aside>
        <!-- Sidebar End-->
        <!-- Category-->
        <div class="span9">          
          <!-- Category Products-->
          <section id="category">
            <div class="row">
              <div class="span9">
               <!-- Category-->
                <section id="categorygrid">
                  <ul class="thumbnails grid">

                    @foreach($product_cate as $item)
                    <li class="span3">
                      <a class="prdocutname" href="{!! URL('chi-tiet-san-pham/'.$item->id.'/'.$item->TenKhongDau.'.html') !!}">{!! $item->TenSP !!}</a>
                      <div class="thumbnail">
                        <span class="sale tooltip-test">Sale</span>
                        <a href="{!! URL('chi-tiet-san-pham/'.$item->id.'/'.$item->TenKhongDau.'.html') !!}"><img alt="" src="{!! asset('public/upload/product/'.$item->AnhChinh) !!}"></a>
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
                  <div class="pagination pull-right">
                    <ul>
                      <li><a href="#">Prev</a>
                      </li>
                      <li class="active">
                        <a href="#">1</a>
                      </li>
                      <li><a href="#">2</a>
                      </li>
                      <li><a href="#">3</a>
                      </li>
                      <li><a href="#">4</a>
                      </li>
                      <li><a href="#">Next</a>
                      </li>
                    </ul>
                  </div>
                </section>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection