@extends('admin.layout_admin_master')

@section('main-header')
    <h1>Danh mục <small>chỉnh sửa</small></h1>
@endsection

@section('main-content')
    <form action="/admin/cate/edit" method="post">
        @csrf
        <div>
            Tên danh mục (*)
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <input type="text" name="id" value="{!! $category->id !!}" hidden/>
                <input type="text" name="name" value="{!! $category->name !!}" class="form-control"/>
            </div>
            <div class="col-12 mt-3">
                <input type="submit" value="Cập nhật" class="btn btn-primary"/>
                <input type="reset" value="Hủy" class="btn btn-danger btn-cancel"/>
            </div>
        </div>
    </form>
@endsection

@section('main-script')
    <script>
        $("input.btn-cancel").click(function (evt) {
            evt.preventDefault();
            console.log('click');
            window.location = "/admin/cate/list";
        });
    </script>
@endsection


