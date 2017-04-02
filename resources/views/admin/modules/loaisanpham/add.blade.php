@extends('admin.master')
@section('controller','Loại sản phẩm')
@section('action','Thêm')
@section('content')
<!-- /.col-lg-12 -->
<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
    <form action="" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
                <label>Danh mục cha:</label>
                <select class="form-control" name="parentID">
                    <option value="0">--Chọn--</option>
                    <?php menuMulti($data); ?>
                </select>
            </div>
            <div class="form-group">
                <label>Tên sản phẩm:</label>
                <input class="form-control" name="Ten" placeholder="Nhập tên loại sản phẩm" />
            </div> 
            <button type="submit" class="btn btn-default"> Thêm </button>
            <button type="reset" class="btn btn-default">Reset</button>
        </form>
    <form>
</div>
@endsection