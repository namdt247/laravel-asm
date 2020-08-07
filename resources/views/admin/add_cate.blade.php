@extends('admin.layout_admin_master')

@section('main-header')
    <h1>Danh mục <small>thêm mới</small></h1>
@endsection

@section('main-content')
    <form action="/admin/cate/add" method="post">
        @csrf
        <div>
            Tên danh mục (*)
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <input type="text" name="name" class="form-control" required/>
            </div>
            <div class="col-12 mt-3">
                <input type="submit" value="Thêm mới" class="btn btn-primary"/>
                <input type="reset" value="Hủy" class="btn btn-danger"/>
            </div>
        </div>
    </form>
@endsection

