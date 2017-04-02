@extends('admin.master')
@section('controller','Loại sản phẩm')
@section('action','sửa')
@section('content')                    <!-- /.col-lg-12 -->
<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
    <form action="" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label>Thư mục cha:</label>
            <select class="form-control" name="parentID">
                <option value="0">--Chọn--</option>
                <?php echo menuMulti($parent,0,$str="--",$data['parent_id']); ?>
            </select>
        </div>
        <div class="form-group">
            <label>Tên loại sản phẩm</label>
            <input class="form-control" name="txtCateName" value="{!! old('txtCateName',isset($data['Ten']) ? $data['Ten'] : '') !!}" />
        </div>
        
        <button type="submit" class="btn btn-default">Sửa</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection