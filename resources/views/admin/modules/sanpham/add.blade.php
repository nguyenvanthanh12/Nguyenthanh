@extends('admin.master')
@section('controller','Sản phẩm')
@section('action','Thêm')
@section('content')
<!-- /.col-lg-12 -->
<form action="" method="POST" enctype="multipart/form-data">
    <div class="col-lg-6" style="padding-bottom:120px">
    @include('admin.blocks.error')
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        
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
            <label>Giảm Giá: (%)</label>
            <input type="text" name="GiamGia" class="form-control" value="{!! old('GiamGia') !!}">
        </div>
         <div class="form-group">
            <label>Sản phẩm tặng kèm: </label>
            <select class="form-control select-multiple" multiple="multiple" name="spkm[]">
            @foreach($spkm as $val)
              <option value="<?php echo $val['id'] ?>"><?php echo $val['Ten'] ?></option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Số lượng:</label>
            <input type="text" name="soluong" class="form-control" value="{{ old('soluong') }}">
        </div>
        <div class="form-group">
            <label>Images</label>
            <input type="file" name="fImages">
        </div>
        
        <div class="form-group">
            <label>Nội dung:</label>
            <textarea class="form-control" rows="3" id="NoiDung" name="NoiDung">{!! old('NoiDung') !!}</textarea>
            
        </div>
        <div class="form-group">
            <label>Bảo hành</label>
            <input class="form-control" name="BaoHanh" value="{!! old('BaoHanh') !!}" />
        </div>
        
        <button type="submit" class="btn btn-default">Thêm</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </div>
    <div class="col-lg-1"></div>
    <div class="col-lg-5" style="padding-bottom:120px">
        @for ($i = 1;$i <= 5;$i++)
        <div class="form-group">
            <label>Ảnh phụ {{ $i }}:</label>
            <input type="file" name="fproductdetail[]">
        </div>
        @endfor
       
        @foreach($para as $val)
        <div class="form-group">
            <label>{{ $val['Ten'] }}: </label>
            <input class="form-control" type="text" value="" name="parameter_{{ $val['id'] }}">
        </div>
        @endforeach
    </div>
<form>
@endsection