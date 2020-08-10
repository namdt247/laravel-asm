@extends('admin.layout_admin_master')

@section('main-header')
    <h1>Danh mục <small style="font-size: 14px; color: green;">thêm mới</small></h1>
@endsection

@section('main-content')
    <form action="/admin/cate/add" method="post" class="mt-3">
        @csrf
        <div>
            Tên danh mục (*)
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <input type="text" name="name" class="form-control" placeholder="Tên danh mục" required/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <input type="submit" value="Thêm mới" class="btn btn-primary "/>
                <input type="reset" value="Hủy" class="btn btn-danger btn-cancel btn-cancel" />
            </div>
        </div>
    </form>
@endsection

@section()
    <script>
        $("input.btn-cancel").click(function (evt) {
            evt.preventDefault();
            window.location = "/admin/cate/list";
        });
    </script>
@endsection

