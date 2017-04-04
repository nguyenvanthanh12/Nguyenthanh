@extends('admin.master')
@section('controller','Sản phẩm')
@section('action','Danh sách')
@section('content')                    <!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Date</th>
            <th>Status</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <tr class="odd gradeX" align="center">
            <td>1</td>
            <td>Áo Thun Nana</td>
            <td>200.000 VNĐ</td>
            <td>3 Minutes Age</td>
            <td>Hiện</td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
            <td class="center">
                <a href="#"><i class="fa fa-pencil fa-fw"></i> Sửa</a><br/>
                <a href="#"><i class="fa fa-trash-o  fa-fw"></i> Xóa</a>
                
            </td>
        </tr>
        
    </tbody>
</table>
@endsection