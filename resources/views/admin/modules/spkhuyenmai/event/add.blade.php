@extends('admin.master')
@section('controller','Sự kiện')
@section('action','Thêm')
@section('content')
<!-- /.col-lg-12 -->
<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
    <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label>Tên sự kiện:</label>
            <input class="form-control" name="TenSK" placeholder="Nhập tên sự kiện" value="{!! old('TenSK') !!}" />
        </div>
        <div class="form-group">
            <label>Mô tả:</label>
            <textarea name="MoTa" rows="10" class="form-control">{!! old('MoTa') !!}</textarea>
        </div> 
        <div class="form-group">
            <label>Hình ảnh:</label>
            <input type="file" name="fimgEvent">
        </div>
        <button type="submit" class="btn btn-default"> Thêm </button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
</div>
@endsection