@extends('frontend.master')
@section('description','Liên hệ')
@section('content')
<!-- breadcrumb -->
<div class="khoangcach"></div>
<div class="khoangcach"></div>
<div class="brc">
  <ul class="breadcrumb container">
    <li><a href="{!! url('/') !!}">Trang chủ</a></li>
    <li class="active">Liên hệ</li>
  </ul>
</div>
<!-- end breadcrumb -->
<div class="container">
  <div class="contact-info">
    <h3>Liên Hệ</h3>
  </div>
  <div class="row">
    <div class="col-sm-offset-2 col-sm-5">
      @include('admin.blocks.error')
    </div>
    <div class="col-sm-5"></div>
  </div>
  <form class="form-horizontal" action="{{ url('lien-he') }}" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label class="control-label col-sm-2" for="HoTen">Họ Tên (<span>*</span>) :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="HoTen" id="HoTen" placeholder="Nguyễn Văn A"/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email (<span>*</span>) :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="email" id="email" placeholder="abc@email.com"/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="TieuDe">Tiêu đề :</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="TieuDe" name="TieuDe">
      </div>
    </div>
    <div class="form-group">        
      <label class="control-label col-sm-2">Nội dung :</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="NoiDung"></textarea>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Gửi</button>
      </div>
    </div>
  </form>
</div>
@endsection