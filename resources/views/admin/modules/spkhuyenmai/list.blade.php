@extends('admin.master')
@section('controller','Sản phẩm sự kiện')
@section('action','Danh sách')
@section('content')                    <!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Chương trình</th>
            <th>số lượng</th>
            <th>Hình ảng</th>
            <th><a href="{!! route('getEvent1Add') !!}">Thêm</a></th>
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
                <?php $event = DB::table('ts_chuongtrinhkhuyenmai')->select('id','TenSK')->where('id',$val['idSK'])->first(); ?>
                {{ $event->TenSK }}
            </td>
            <td><?php echo $val['soluong'] ?></td>
            <td><img src="{!! asset('upload/khuyenmai/sanpham/'.$val['anh']) !!}" width="50px" class="img-responsive"></td>

           
            <td class="center">
                <i class="fa fa-pencil fa-fw"></i> <a href="{!! route('getEvent1Edit',$val['id']) !!}">Sửa</a><br />
                <i class="fa fa-trash-o  fa-fw"></i><a href="{!! route('getEvent1Delete',$val['id']) !!}" onclick="return confirm('Bạn có chắc muốn xóa danh mục này ?')"> Xóa</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection