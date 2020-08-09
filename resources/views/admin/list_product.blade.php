@extends('admin.layout_admin_master')

@section('main-header')
    <h1>Sản phẩm <small>danh sách</small></h1>
    <a href="{!! route('product.add') !!}" class="btn btn-warning float-right">Thêm sản phẩm</a>
@endsection

@section('main-content')
    <div class="col-md-12">
        <table id="tblMain" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Tên Sản Phẩm</th>
                <th>Danh mục</th>
                <th>Giá</th>
                <th>Hình ảnh</th>
                <th>Thao tác</th>
            </tr>
            </thead>

            <tbody>
            @foreach($products as $prd)
                <tr>
                    <td class="border-top-0 px-2 py-4">
                        {{$prd->id}}
                    </td>
                    <td class="border-top-0 px-2 py-4">
                        {{$prd->name}}
                    </td>
                    <td class="border-top-0 px-2 py-4">
                        {{$prd->category->name}}
                    </td>
                    <td class="border-top-0 px-2 py-4">
                        {{ number_format($prd->price, 0, '', '.') }}
                    </td>
                    <td class="border-top-0 px-2 py-4">
                        @foreach($prd->large_photos as $p)
                            <img src="{{$p}}" alt="" class="rounded-circle" width="45" height="45">
                        @endforeach
                    </td>

                    <td class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                        <a href="{!! route('product.detail', $prd->id) !!}" target="_blank" class="text-primary mr-1">Detail</a>
                        <a href="{!! route('product.edit', $prd->id) !!}" class="text-orange mr-1">Edit</a>
                        <a href="{!! route('product.delete', $prd->id) !!}" class="text-danger mr-1">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>

            <tfoot>
            <tr>
                <th>ID</th>
                <th>Tên Sản Phẩm</th>
                <th>Danh mục</th>
                <th>Giá</th>
                <th>Hình ảnh</th>
                <th>Thao tác</th>
            </tr>
            </tfoot>
        </table>
        <div class="float-right">
            {{ $products->links() }}
        </div>
    </div>
@endsection
