@extends('admin.master')
@section('controller','Quảng cáo')
@section('action','Thêm')
@section('content')
<!-- /.col-lg-12 -->
<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
    <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label>Đường link:</label>
            <input class="form-control" name="url" placeholder="http://...." type="url" value="{!! old('url') !!}" />
        </div> 
        <div class="form-group">
            <label>Hình ảnh:</label>
            <input type="file" name="Anh">
        </div>
        <div class="form-group">
            <label>Vị trí:</label>
            <label class="radio-inline">
                <input name="ViTri" value="0" type="radio" 
                @if(old('ViTri') == 0)
                    checked="checked" 
                @endif
                 > Phần đầu trang
            </label>
            <label class="radio-inline">
                <input name="ViTri" value="1" type="radio" 
                @if(old('ViTri') == 1)
                    checked="checked" 
                @endif
                >Phần thân trang
            </label>
        </div>
        <button type="submit" class="btn btn-default"> Thêm </button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
</div>
@endsection