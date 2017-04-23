@extends('admin.master')
@section('controller','Khuyến mại')
@section('action','sửa')
@section('content')                    <!-- /.col-lg-12 -->
<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
    <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label>Tên sự kiện:</label>
            <input class="form-control" name="TenSK" placeholder="Nhập tên sự kiện" value="{!! old('Ten',isset($data['TenSK']) ? $data['TenSK'] : null) !!}" />
        </div>
        <div class="form-group">
            <label>Mô tả:</label>
            <textarea rows="10" name="MoTa" class="form-control">
              {!! old('Ten',isset($data['Ten']) ? $data['MoTa'] : null) !!}  
            </textarea>
        </div>
        <div class="form-group">
            <label>Hình hiện tại:</label>
            <img src="{!! asset('upload/khuyenmai/'.$data['Anh']) !!}" width="100px" class="img-responsive">
            <input type="hidden" name="fImageCurrent" value="{!! $data['Anh'] !!}">
        </div>
        <div class="form-group">
            <label>Hình ảnh:</label>
            <input type="file" name="igmEven">
        </div>
        
        <button type="submit" class="btn btn-default"> Sửa </button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
</div>
@endsection