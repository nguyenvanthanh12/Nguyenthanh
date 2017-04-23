@extends('admin.master')
@section('controller','Sự kiện')
@section('action','Danh sách')
@section('content')                    <!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Tên sự kiện</th>
            <th>Mô tả</th>
            <th>Hình ảnh</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 0; ?>
        @foreach($data as $val)
        <?php $stt++; ?>
        <tr class="odd gradeX" align="center">
            <td><?php echo $stt; ?></td>
            <td><?php echo $val['TenSK'] ?></td>
            <td><?php echo $val['MoTa'] ?></td>
            <td>
                @if(!empty($val['Anh']))
                    <img src="{!! asset('upload/khuyenmai/'.$val['Anh']) !!}" width="50px" class="img-responsive">
                @else
                    <span style="color: red;">Không có ảnh</span>
                @endif
            </td>
            <td class="center">
                <i class="fa fa-pencil fa-fw"></i> <a href="{!! route('getEventEdit',$val['id']) !!}">Sửa</a><br />
                <i class="fa fa-trash-o  fa-fw"></i><a href="{!! route('getEventDelete',$val['id']) !!}" onclick="return confirm('Bạn có chắc muốn xóa danh mục này ?')"> Xóa</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection