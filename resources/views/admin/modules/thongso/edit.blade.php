@extends('admin.master')
@section('controller','Chi tiết thông số')
@section('action','Sửa')
@section('content')
<!-- /.col-lg-12 -->
<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
    <form action="" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label>Tên:</label>
            <input type="text" name="Ten" {!! old('Ten',isset($data['Ten']) ? $data['Ten'] : null) !!}>
            
        </div> 
        <button type="submit" class="btn btn-default"> Thêm </button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
</div>
@endsection