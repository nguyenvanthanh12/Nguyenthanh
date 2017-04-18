@extends('admin.master')
@section('controller','Liên hệ')
@section('action','Danh sách')
@section('content')                    <!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Tiêu đề</th>
            <th>Nội dung</th>
            <th>Trạng thái</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 0; ?>
        @foreach($data as $item)
        <?php $stt++; ?>
        <tr class="odd gradeX" align="center">
            <td>{!! $stt !!}</td>
            <td>{{ $item['HoTen'] }}</td>
            <td>{{ $item['email'] }}</td>
            <td>{{ $item['TieuDe'] }}</td>
            <td>{{ $item['NoiDung'] }}</td>
            <td>
                @if($item['trangthai'] == 0)
                <a href="{{ route('getSetting',$item['id']) }}" type="button" id="xem"><input type="checkbox" ></a><span style="color: red;"> Chưa xem</span>
                @else
                <input type="checkbox" checked="" disabled><span style="color: blue;"> Đã xem</span>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection