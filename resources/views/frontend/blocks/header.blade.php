<?php $setting = DB::table('ts_caidat')->where('id',5)->first(); ?>
<div class="header navbar navbar-mynav navbar-fixed-top" style="background-color: {!! $setting->color_top !!};">  <!--  navigation -->
  <div class="container">
    <div class="banner row">  <!-- Banner -->

      <div class="logo col-md-2">
        <a href="{!! url('/') !!}"><img src="{!! asset('public/upload/'.$setting->logo) !!}" height="50px"></a>
      </div>
      <!-- /////  search ///// -->
      <div class="search col-md-7"> 
        <form class="navbar-form" action="tim-kiem" method="post" role="search">
          <div class="form-group">
            <input type="text" name="txtSearch" class="form-control txtForm" placeholder="">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
          </div>
          <div class="form-group timkiem" >
            <button type="submit" class="btn btn-warning">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </div>
        </form>
      </div>  <!-- end search -->
      <!-- ***** giỏ hàng và thành viện ***** -->
      <div class="giohang col-md-3" >
        <div id="header-car">
          <a href="{!! url('gio-hang') !!}" title="">
            <i class="fa fa-shopping-cart fa-2x"></i> 
            <span>Giỏ hàng</span>
            
          </a>
        </div>
        
        

      </div>  <!-- end giỏ hàng  -->

    </div>  <!-- end banner -->
    </div>
    <div class="phancach"></div>
    <div class="container">
    <!-- ***** Menu ***** -->
    
    @include('frontend.blocks.nav')

    <!-- end menu -->
  </div>
</div>  <!-- end navigation -->