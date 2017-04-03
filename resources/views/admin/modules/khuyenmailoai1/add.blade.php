@extends('admin.master')
@section('controller','Khuyến mại loai 1')
@section('action','Thêm')
@section('content')
<!-- /.col-lg-12 -->
<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
    <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label>Tên sự kiện:</label>
            <input class="form-control" name="Ten" placeholder="Nhập tên sự kiện" value="{!! old('Ten') !!}" />
        </div>
        <div class="form-group">
            <label>Hình thức:</label>
            <input class="form-control" name="HinhThuc" placeholder="Nhập hình thức của sự kiện" value="{!! old('HinhThuc') !!}" />
        </div>
        <div class="form-group">
            <label>Ảnh đại diện:</label>
            <input type="file" name="igmEven">
        </div>
        <div class="form-group">
            <label>Ngày bắt đầu:</label>
            <input class="form-control" value="{!! old('NgayBatDau') !!}" name="NgayBatDau" type="date" />
        </div> 
        <div class="form-group">
            <label>Ngay kết thúc:</label>
            <input class="form-control" name="NgayKetThuc" value="{!! old('NgayKetThuc') !!}" type="date" />
        </div>
        <div class="form-group">
            <label>Trạng thái:</label>
            <label class="radio-inline">
                <input name="ttevent" value="1" checked="" type="radio" 
                @if(old('ttevent') == 1)
                    checked
                @endif > Ẩn
            </label>
            <label class="radio-inline">
                <input name="ttevent" value="2" type="radio" 
                @if(old('ttevent') == 2)
                    checked
                @endif > Hiện
            </label>
        </div>
        <button type="submit" class="btn btn-default"> Thêm </button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
</div>
@endsection