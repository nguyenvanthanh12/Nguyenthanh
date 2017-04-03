@extends('admin.master')
@section('controller','Khuyến mại loại 1')
@section('action','Danh sách')
@section('content')                    <!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Tên sự kiện</th>
            <th>Hình thức</th>
            <th>Anh đại diện</th>
            <th>Ngày diễn ra</th>
            <th>Ngày kết thúc</th>
            <th>Trạng Thái</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 0; ?>
        @foreach($data as $val)
        <?php $stt++; ?>
        <tr class="odd gradeX" align="center">
            <td><?php echo $stt; ?></td>
            <td><?php echo $val['Ten'] ?></td>
            <td><?php echo $val['HinhThuc'] ?></td>
            <td><img src="{!! asset('upload/khuyenmai/'.$val['Anh']) !!}" width="50px" class="img-responsive"></td>
            <td><?php echo $val['NgayBatDau'] ?></td>
            <td><?php echo $val['NgayKetThuc'] ?></td>
            <td>
                <?php
                    if($val['trangthai'] == 1){
                        echo 'Ẩn';
                    }else { echo 'Hiện'; }
                ?>
            </td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{!! route('getEvent1Delete',$val['id']) !!}" onclick="return confirm('Bạn có chắc muốn xóa danh mục này ?')"> Xóa</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! route('getEvent1Edit',$val['id']) !!}">Sửa</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection