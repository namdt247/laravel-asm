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
                <input type="reset" value="Hủy" class="btn btn-danger"/>
            </div>
        </div>
    </form>
@endsection


