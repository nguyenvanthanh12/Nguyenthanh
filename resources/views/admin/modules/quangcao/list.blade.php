@extends('admin.master')
@section('controller','Quảng cáo')
@section('action','Danh sách')
@section('content')                    <!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Đường dẫn</th>
            <th>Vị trí</th>
            <th>Hình ảnh</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 0; ?>
        @foreach($data as $item)
        <?php $stt++; ?>
        <tr class="odd gradeX" align="center">
            <td>{!! $stt !!}</td>
            <td><?php 
                if (!empty($item['url'])) {
                    echo $item['url'];
                }else { echo 'Không có link liên kết'; }
            ?></td>
            <td>
                @if($item['ViTri'] == 0)
                    Phần đầu trang
                @else
                    Phần thân trang
                @endif
            </td>
            <td>
                <img src="{{ asset('upload/quangcao/'.$item['Anh']) }}" width="100px" class="img-responsive">
            </td>
            <td class="center">
                <i class="fa fa-pencil fa-fw"></i> <a href="{!! route('getAdvEdit',$item['id']) !!}">Sửa</a><br />
                <i class="fa fa-trash-o  fa-fw"></i><a href="{!! route('getAdvDel',$item['id']) !!}" onclick="return confirm('Bạn có chắc muốn xóa danh mục này ?')"> Xóa</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection