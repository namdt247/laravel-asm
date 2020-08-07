@extends('admin.layout_admin_master')

@section('main-header')
    <h1>Danh mục <small>danh sách</small></h1>
    <a href="{!! route('cate.add') !!}" class="btn btn-warning pull-right float-right">Thêm mới</a>
@endsection

@section('main-content')
    <div class="col-md-12">
        <table id="tblMain" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Thao tác</th>
                </tr>
            </thead>

            <tbody>
            @foreach($categories as $cate)
                <tr>
                    <td class="border-top-0 px-2 py-4">
                        {{$cate->id}}
                    </td>
                    <td class="border-top-0 px-2 py-4">
                        {{$cate->name}}
                    </td>

                    <td class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                        <a href="/admin/cate/edit/{{$cate->id}}" class="text-orange mr-1">Edit</a>
                        <a href="/admin/cate/delete/{{$cate->id}}" class="text-danger mr-1">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>

            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Thao tác</th>
                </tr>
            </tfoot>
        </table>
        <div class="float-right">
            {{$categories->links()}}
        </div>
    </div>
@endsection
