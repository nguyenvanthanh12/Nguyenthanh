@extends('admin.master')
@section('controller','Tài khoản')
@section('action','Sửa')
@section('content')
<!-- /.col-lg-12 -->
<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
    <form action="" method="POST">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="form-group">
            <label>Tên đăng nhập:</label>
            <input class="form-control" name="username" value="{!! old('username',isset($data['username']) ? $data['username'] : null) !!}" disabled />
        </div>
        <div class="form-group">
            <label>Mật khẩu:</label>
            <input type="password" class="form-control" name="password" />
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" name="email" value="{!! old('email',isset($data['email']) ? $data['email'] : null) !!}"/>
        </div>
        <div class="form-group">
            <label>Họ Tên:</label>
            <input type="text" class="form-control" name="HoTen" value="{!! old('HoTen',isset($data['HoTen']) ? $data['HoTen'] : null) !!}"/>
        </div>
        <div class="form-group">
            <label>Địa chỉ:</label>
            <input type="text" class="form-control" name="DiaChi" value="{!! old('DiaChi',isset($data['DiaChi']) ? $data['DiaChi'] : null) !!}"/>
        </div>
        <div class="form-group">
            <label>Số điện thoại:</label>
            <input type="text" class="form-control" name="SDT" value="{!! old('SDT',isset($data['SDT']) ? $data['SDT'] : null) !!}"/>
        </div>
        @if(Auth::user()->id != $data['id'])
        <div class="form-group">
            <label>Chức vụ:</label>
            <label class="radio-inline">
                <input name="rdoLevel" value="1" type="radio" 
                @if($data['level'] == 1)
                    checked="checked" 
                @endif
                 >Nhân viên
            </label>
            <label class="radio-inline">
                <input name="rdoLevel" value="0" type="radio" 
                @if($data['level'] == 0)
                    checked="checked" 
                @endif
                >Khách hàng
            </label>
        </div>
        @endif
        <button type="submit" class="btn btn-default">Sửa</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
                
@endsection