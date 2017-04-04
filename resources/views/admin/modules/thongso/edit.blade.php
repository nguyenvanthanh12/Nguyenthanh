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
            <label>Chọn thông số:</label>
            <select class="form-control" name="thongso">
                <option value="">--Chọn--</option>
                <?php
                    $select = old('thongso');
                    foreach ($para as $value) {
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
                <?php menuMulti($cate,0,$str="-- ",$data['idLSP']); ?>
            </select>
        </div>
        <div class="form-group">
            <label>Chi tiết:</label>
            <textarea class="form-control" rows="3" id="ChiTiet" name="ChiTiet">{!! old('ChiTiet',isset($data['ChiTiet']) ? $data['ChiTiet'] : null) !!}</textarea>
            <script type="text/javascript">CKEDITOR.replace('ChiTiet');</script>
        </div> 
        <button type="submit" class="btn btn-default"> Thêm </button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
</div>
@endsection