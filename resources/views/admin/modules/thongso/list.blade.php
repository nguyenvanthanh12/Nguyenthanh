@extends('admin.master')
@section('controller','Loại sản phẩm')
@section('action','Danh sách')
@section('content')                    <!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Loại sản phẩm</th>
            <th>Thông số</th>
            <th>Chi tiết</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt=0; ?>
        @foreach($data as $val)
        <?php $stt++; ?>
        <tr>
            <td>{!! $stt; !!}</td>
            <td><?php 
                $lsp = DB::table('ts_loaisanpham')->where('id',$val['idLSP'])->first();
                echo $lsp->Ten;
             ?></td>
            <td><?php $ts = DB::table('ts_thongso')->where('id',$val['idTS'])->first();
                echo $ts->Ten; ?></td>
            <td><?php echo $val['ChiTiet'] ?></td>
            <td class="center">
            <i class="fa fa-trash-o  fa-fw"></i>
            <a href="{!! route('getParaDel',$val['id']) !!}" onclick="return confirm('Bạn có chắc muốn xóa thông số này ?')" > Xóa</a>
            </td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! route('getParaEdit',$val['id']) !!}">Sửa</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection