@extends('admin.master')
@section('controller','Đơn đặt hàng')
@section('action','Danh sách')
@section('content')                    <!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Tên khách hàng</th>
            <th>Số điện toại</th>
            <th>Ghi chú</th>
            <th>Trạng thái</th>
            <th>Chi tiết</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 0; ?>
        @foreach($order as $item)
        <?php $stt++; ?>
        <tr class="odd gradeX" align="center">
            <td>{!! $stt !!}</td>
            <td>
                <?php $user = DB::table('ts_users')->select('id','HoTen','SDT')->where('id',$item['idUser'])->first(); ?>
                <?php echo $user->HoTen; ?>
            </td>
            <td>{{ $user->SDT }}</td>
            <td>{{ $item['GhiChu'] }}</td>
            <td>
                @if($item['TrangThai'] == 0)
                <a href="{{ route('getOrderSt',$item['id']) }}" type="button" id="xem"><input type="checkbox" ></a><span style="color: red;"> Chưa giao</span>
                @else
                <input type="checkbox" checked="" disabled><span style="color: blue;"> Đã giao</span>
                @endif
            </td>
            <td><a href="{{ route('getDetailOrder',$item['id']) }}" class="btn btn-success" >Chi tiết</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection