@extends('admin.master')
@section('controller','Sản phẩm')
@section('action','Thêm')
@section('content')
<!-- /.col-lg-12 -->
<div class="col-lg-7" style="padding-bottom:120px">
    @include('admin.blocks.error')
    <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="form-group">
            <label>Chương trình khuyến mãi:</label>
            <select name="idKM" class="form-control">
                <option value="">--Chọn--</option>
                <?php
                $select = old('idKM');
                    foreach ($event as $value) {
                        if($select != 0 && $value['id'] == $select){
                            echo '<option value="'.$value['id'].'" selected>'.$value['Ten'].'</option>';    
                        }else{
                            echo '<option value="'.$value['id'].'" >'.$value['Ten'].'</option>';    
                        }
                        
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Thư mục cha:</label>
            <select name="idLSP" class="form-control">
                <option value="">--Chọn--</option>
                <?php menuMulti($cate,0,"-- ",old('idLSP')); ?>
            </select>
        </div>
        <div class="form-group">
            <label>MaSP:</label>
            <input class="form-control" name="MaSP" value="{{ old('MaSP') }}" />
        </div>
        <div class="form-group">
            <label>Tên sản phẩm:</label>
            <input class="form-control" name="TenSP" value="{!! old('TenSP') !!}" />
        </div>
        <div class="form-group">
            <label>Giá:</label>
            <input type="text" name="Gia" class="form-control" value="{!! old('Gia') !!}">
        </div>
        <div class="form-group">
            <label>Images</label>
            <input type="file" name="fImages">
        </div>
        <div class="form-group">
            <label>Tóm Tắt:</label>
            <textarea class="form-control" rows="3" id="TomTat" name="TomTat">{!! old('TomTat') !!}</textarea>
            <script type="text/javascript">CKEDITOR.replace('TomTat');</script>
        </div>
        <div class="form-group">
            <label>Nội dung:</label>
            <textarea class="form-control" rows="3" id="NoiDung" name="NoiDung">{!! old('NoiDung') !!}</textarea>
            <script type="text/javascript">CKEDITOR.replace('NoiDung');</script>
        </div>
        <div class="form-group">
            <label>Bảo hành</label>
            <input class="form-control" name="BaoHanh" value="{!! old('BaoHanh') !!}" />
        </div>
        
        <div class="form-group">
            <label>Trạng thái:</label>
            <label class="radio-inline">
                <input name="rdoStatus" value="1" checked="" type="radio">Cón hàng
            </label>
            <label class="radio-inline">
                <input name="rdoStatus" value="0" type="radio">Hết hàng
            </label>
        </div>
        <button type="submit" class="btn btn-default">Thêm</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection