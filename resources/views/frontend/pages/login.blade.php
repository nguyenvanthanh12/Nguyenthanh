@extends('frontend.master')
@section('content')
<!-- breadcrumb -->
<div class="khoangcach"></div>
<div class="khoangcach"></div>
<div class="brc">
  <ul class="breadcrumb container">
    <li><a href="{!! url('/') !!}">Trang chủ</a></li>
    <li class="active">Đăng nhập</li>
  </ul>
</div>
<!-- end breadcrumb -->
<div class="container">
<div class="main">
  <!-- start registration -->
  <div class="registration">
    <div class="registration_left col-md-6">
    <h2>Nếu bạn chưa có tài khoản</h2>
    <!-- [if IE] 
        < link rel='stylesheet' type='text/css' href='ie.css'/>  
     [endif] -->  
      
    <!-- [if lt IE 7]>  
        < link rel='stylesheet' type='text/css' href='ie6.css'/>  
    <! [endif] -->  
    
     <div class="registration_form">
     <!-- Form -->
      
        <div>
          <a href="{!! url('dang-ky') !!}" class="btn btn-success">Đăng ký</a>
        </div>
       
      <!-- /Form -->
    </div>
  </div>
  <div class="col-md-6">
    <h2>Đăng nhập</h2>
     <div class="">
     @include('admin.blocks.error')
     <div class="col-lg-12">
         @if (Session::has('flash_message'))
             <div class="alert alert-{!! Session::get('flash_level') !!}">
                 {!! Session::get('flash_message') !!}
             </div>
         @endif
     </div>
     <!-- Form -->
      <form action="" method="post" class="form">
      <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="form-group">
          <label>
            <input placeholder="Tài khoản:" class="form-control" type="text" class="" name="username" >
          </label>
        </div>
        <div class="form-group">
          <label>
            <input placeholder="Mật khẩu" type="password" class="form-control" name="password" >
          </label>
        </div>            
        <div>
          <input type="submit" value="Đăng nhập" class="btn btn-success">
        </div>
      </form>
      <!-- /Form -->
      </div>
  </div>
  <div class="clearfix"></div>
  </div>
  <!-- end registration -->
</div>
</div>
@endsection