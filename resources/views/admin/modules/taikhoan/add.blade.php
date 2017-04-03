@extends('admin.master')
@section('controller','Tài khoản')
@section('action','Thêm')
@section('content')
                    <!-- /.col-lg-12 -->
<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
    <form action="" method="POST">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="form-group">
            <label>Tên đăng nhập:</label>
            <input class="form-control" name="username" value="{!! old('username') !!}" />
        </div>
        <div class="form-group">
            <label>Mật khẩu:</label>
            <input type="password" class="form-control" name="password" />
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" name="email" value="{!! old('email') !!}"/>
        </div>
        <div class="form-group">
            <label>Họ Tên:</label>
            <input type="text" class="form-control" name="HoTen" value="{!! old('HoTen') !!}"/>
        </div>
        <div class="form-group">
            <label>Địa chỉ:</label>
            <input type="text" class="form-control" name="DiaChi" value="{!! old('DiaChi') !!}"/>
        </div>
        <div class="form-group">
            <label>Số điện thoại:</label>
            <input type="text" class="form-control" name="SDT" value="{!! old('SDT') !!}"/>
        </div>
        <div class="form-group">
            <label>Chức vụ:</label>
            <label class="radio-inline">
                <input name="rdoLevel" value="1" checked="" type="radio" 
                @if(old('rdoLevel') == 1)
                    checked="checked" 
                @endif
                 >Nhân viên
            </label>
            <label class="radio-inline">
                <input name="rdoLevel" value="0" type="radio" 
                @if(old('rdoLevel') == 0)
                    checked="checked" 
                @endif
                >Khách hàng
            </label>
        </div>
        <button type="submit" class="btn btn-default">Thêm</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection
                
