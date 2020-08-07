@extends('admin.layout_admin_master')

@section('main-header')
    <h1>Đơn hàng <small>danh sách</small></h1>
    <a href="#" class="btn btn-warning float-right">Thêm đơn hàng</a>
@endsection

@section('main-content')
    <div class="col-md-12">
        <table id="tblMain" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Code</th>
                <th>Khách hàng</th>
                <th>Tên Sản Phẩm</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>
                <th>Ngày đặt</th>
                <th>Thao tác</th>
            </tr>
            </thead>

            <tbody>
            @foreach($orders as $od)
                <tr>
                    <td class="border-top-0 px-2 py-4">
                        {{$od->od_code}}
                    </td>
                    <td class="border-top-0 px-2 py-4">
                        {{$od->od_name}}
                    </td>
                    <td class="border-top-0 px-2 py-4">
                        Tên sản phẩm
                    </td>
                    <td class="border-top-0 px-2 py-4">
                        Số lượng
                    </td>
                    <td class="border-top-0 px-2 py-4">
                        {{$od->od_total_price}}
                    </td>
                    <td class="border-top-0 px-2 py-4">
                        {{$od->created_at}}
                    </td>
                    <td class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                        <a href="#" class="text-primary mr-1">Detail</a>
                        <a href="#" class="text-orange mr-1">Edit</a>
                        <a href="#" class="text-danger mr-1">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>

            <tfoot>
            <tr>
                <th>Code</th>
                <th>Khách hàng</th>
                <th>Tên Sản Phẩm</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>
                <th>Ngày đặt</th>
                <th>Thao tác</th>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection




