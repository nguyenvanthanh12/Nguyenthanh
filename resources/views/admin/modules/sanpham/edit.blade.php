@extends('admin.master')
@section('controller','Sản phẩm')
@section('action','Sửa')
@section('content')                    <!-- /.col-lg-12 -->
<form action="" method="POST" enctype="multipart/form-data" name="frmEditPd">
    <div class="col-lg-6" style="padding-bottom:120px">
    @include('admin.blocks.error')
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="form-group">
            <label>Thư mục cha:</label>
            <select name="idLSP" class="form-control">
                <option value="">--Chọn--</option>
                <?php menuMulti($cate,0,"-- ",$product['idLSP']); ?>
            </select>
        </div>
        <div class="form-group">
            <label>MaSP:</label>
            <input class="form-control" name="MaSP2" value="{{ old('MaSP2',isset($product) ? $product['MaSP'] : null) }}" />
        </div>
        <div class="form-group">
            <label>Tên sản phẩm:</label>
            <input class="form-control" name="TenSP" value="{!! old('TenSP',isset($product) ? $product['TenSP'] : null) !!}" />
        </div>
        <div class="form-group">
            <label>Giá:</label>
            <input type="text" name="Gia" class="form-control" value="{!! old('Gia',isset($product) ? $product['Gia'] : null) !!}">
        </div>
        <div class="form-group">
            <label>Giảm Giá: (%)</label>
            <input type="text" name="GiamGia" class="form-control" value="{!! old('GiamGia', isset($product) ? $product['GiamGia'] : null) !!}">
        </div>
        <div class="form-group">
            <label>Số lượng:</label>
            <input type="text" name="soluong" class="form-control" value="{{ old('soluong', isset($product) ? $product['soluong'] : null) }}">
        </div>
        <div class="form-group">
            <label>Hình hiện tại</label>
            <img src="{!! asset('upload/product/'.$product['AnhChinh']) !!}" width="150px" class="img-responsive">
            <input type="hidden" name="fImageCurrent" value="{!! $product['AnhChinh'] !!}">
        </div>
        <div class="form-group">
            <label>Ảnh chính</label>
            <input type="file" name="fImages2">
        </div>
        
        <div class="form-group">
            <label>Nội dung:</label>
            <textarea class="form-control" rows="3" id="NoiDung" name="NoiDung">{!! old('NoiDung',isset($product) ? $product['NoiDung'] : null) !!}</textarea>
            <script type="text/javascript">CKEDITOR.replace('NoiDung');</script>
        </div>
        <div class="form-group">
            <label>Bảo hành</label>
            <input class="form-control" name="BaoHanh" value="{!! old('BaoHanh',isset($product) ? $product['BaoHanh'] : null) !!}" />
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
    </div>
    <div class="col-lg-1"></div>
    <div class="col-lg-5" style="padding-bottom:120px">
        @foreach ($prImg as $key => $item)
        <div class="form-group imgDT" id="{!! $key !!}">
            <img src="{!! asset('upload/product/imgdetail/'.$item['Ten']) !!}" width="200px" class="img-responsive" idHinh="{{ $item['id'] }}" id="{{ $key }}">
            <a href="javascript:void(0)" type="button" id="del-imgdetail" class="btn btn-danger btn-circle icon_del"><i class="fa fa-times"></i></a>
        </div>
        @endforeach
        <button type="button" class="btn btn-primary" id="addImg">Thêm ảnh</button>
        <div id="insert"></div>
        <?php
                $paraDetail = DB::table('ts_loaithongso')->where('product_id',$product['id'])->get();
                
            ?>
        @foreach($para as $val)
        <div class="form-group">
            <label>{{ $val['Ten'] }}: </label>
            <input class="form-control" type="text" value="" name="parameter_{{ $val['id'] }}">
        </div>
        @endforeach
    </div>
<form>
@endsection