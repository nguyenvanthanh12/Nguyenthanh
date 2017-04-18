<div class="header navbar navbar-mynav navbar-fixed-top">  <!--  navigation -->
  <div class="container">
    <div class="banner row">  <!-- Banner -->

      <div class="logo col-md-2">
        <a href="{!! url('/') !!}"><img src="{!! asset('public/frontend/img/logo.png') !!}" height="50px"></a>
      </div>
      <!-- /////  search ///// -->
      <div class="search col-md-7"> 
        <form class="navbar-form" action="" method="post">
          <div class="form-group">
            <input type="text" name="txtSearch" class="form-control txtForm" placeholder="">
          </div>
          <div class="form-group timkiem">
            <button type="button" class="btn btn-warning">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </div>
        </form>
      </div>  <!-- end search -->
      <!-- ***** giỏ hàng và thành viện ***** -->
      <div class="giohang col-md-3">
        <div id="header-car">
          <a href="" title="">
            <i class="fa fa-shopping-cart fa-2x"></i> 
            <span>Giỏ hàng</span>
            <span class="badge">0</span>
          </a>
        </div>
        <div class="xinchao">
          <span class="glyphicon glyphicon-user"></span>
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