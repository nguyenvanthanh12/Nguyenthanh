@extends('admin.master')
@section('controller','Loại sản phẩm')
@section('action','sửa')
@section('content')                    <!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Tên Loại Sản phẩm</th>
            <th>Thư mục cha</th>
            <th>Thời gian tạo</th>
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
            <td>
            @if($val['parent_id'] == 0)
                <?php echo '<div style="color:red;">'.'Không có'.'</div>'; ?>
            @else
                <?php
                    $parent = DB::table('ts_loaisanpham')->where('id',$val['parent_id'])->first();
                    echo $parent->Ten;
                ?>
            @endif
            </td>
            <td><?php echo $val['created_at'] ?></td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection