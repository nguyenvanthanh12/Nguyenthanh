@extends('admin.master')
@section('controller','Loại sản phẩm')
@section('action','Danh sách')
@section('content')
<!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Tài Khoản</th>
            <th>Email</th>
            <th>Ho Tên</th>
            <th>Địa chỉ</th>
            <th>SDT</th>
            <th>Chức vụ</th>
            <th>Xóa</th>
            <th>Sửa</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 0; ?>
        @foreach($data as $val)
        <?php $stt++; ?>
        <tr class="odd gradeX" align="center">
            <td><?php echo $stt; ?></td>
            <td><?php echo $val['username'] ?></td>
            <td><?php echo $val['email'] ?></td>
            <td><?php echo $val['HoTen'] ?></td>
            <td><?php echo $val['DiaChi'] ?></td>
            <td><?php echo $val['SDT'] ?></td>
            <td>
            @if($val['id'] == 1 && $val['level'] == 1)
                <?php echo '<div style="color:Red;">'.'Quản lý'.'</div>'; ?>
            @elseif($val['level'])
                <?php echo '<div style="color:blue;">'.'Nhân viên'.'</div>'; ?>
            @else
                <?php echo '<div style="">'.'khách hàng'.'</div>'; ?>
            @endif
            </td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{!! route('getUserDelete', ['id' => $val['id']]) !!}" onclick="confirm('Bạn có chắc muốn xóa tài khoản này ?')"> Xóa</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! route('getUserEdit', ['id' => $val['id']]) !!}">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
                
@endsection