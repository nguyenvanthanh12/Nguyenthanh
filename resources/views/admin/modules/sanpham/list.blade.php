@extends('admin.master')
@section('controller','Sản phẩm')
@section('action','Danh sách')
@section('content')                    <!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Mã SP</th>
            <th>Loại SP</th>
            <th>Tên SP</th>
            <th>Giá</th>
            <th>Ảnh chính</th>
            <th>Thời gian tạo</th>
            <th>Bảo hành</th>
            
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $item)
        <tr class="odd gradeX" align="center">
            <td>1</td>
            <td>{!! $item['MaSP'] !!}</td>
            <td>
                <?php $cate = DB::table('ts_loaisanpham')->where('id',$item['idLSP'])->first(); ?>
                @if(!empty($cate->Ten))
                    {!! $cate->Ten !!}
                @endif
            </td>
            <td>{!! $item['TenSP'] !!}</td>
            <td>{!! number_format($item['Gia'],0,",",".") !!} VND</td>
            <td><img src="{!! asset('upload/product/'.$item['AnhChinh']) !!}" width="50px" class="img-responsive"></td>
            <td>
                <!-- <?php //$para = DB::table('ts_thongso')
                    //->select('Ten')
                    //->join('ts_loaithongso', 'ts_thongso.id', '=', 'ts_loaithongso.idTS')
                    //->where('ts_loaithongso.idSP', $item['id'])
                    //->get()->toArray();  
                ?>
                 -->
                {!! $item['created_at'] !!}
            </td>
            <td>{!! $item['BaoHanh'] !!}</td>
            <td class="center">
                <a href="{!! route('getProductEdit',$item['id']) !!}"><i class="fa fa-pencil fa-fw"></i> Sửa</a><br/>
                <a href="{!! route('getProductDel',$item['id']) !!}" onclick="return confirm('Bạn chắc muốn xóa sản phẩm này ?')"><i class="fa fa-trash-o  fa-fw"></i> Xóa</a>
                
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection