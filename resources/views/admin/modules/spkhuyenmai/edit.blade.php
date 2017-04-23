@extends('admin.master')
@section('controller','Sản phẩm')
@section('action','sửa')
@section('content')                    <!-- /.col-lg-12 -->
<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.error')
    <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label>Chương trình khuyến mãi:</label>
            <select name="idSK" class="form-control">
                <option value="">--Chọn--</option>
                <?php
                $select = $data['idSK'];
                    foreach ($event as $value) {
                        if($select != 0 && $value['id'] == $select){
                            echo '<option value="'.$value['id'].'" selected>'.$value['TenSK'].'</option>';    
                        }else{
                            echo '<option value="'.$value['id'].'" >'.$value['TenSK'].'</option>';    
                        }
                        
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Tên sự kiện:</label>
            <input class="form-control" name="Ten" placeholder="Nhập tên sự kiện" value="{!! old('Ten',isset($data['Ten']) ? $data['Ten'] : null) !!}" />
        </div>
        <div class="form-group">
            <label>Số lượng:</label>
            <input class="form-control" name="soluong" placeholder="" value="{!! old('soluong',isset($data['Ten']) ? $data['soluong'] : null) !!}" />
        </div>
        <div class="form-group">
            <label>Hình hiện tại:</label>
            <img src="{!! asset('upload/khuyenmai/sanpham/'.$data['anh']) !!}" width="100px" class="img-responsive">
            <input type="hidden" name="fImageCurrent" value="{!! $data['anh'] !!}">
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