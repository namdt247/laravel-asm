@extends('admin.layout_admin_master')

@section('main-header')
    <h1>Sản phẩm <small style="font-size: 14px; color: green;">danh sách</small></h1>
    <a href="{!! route('product.add') !!}" class="btn btn-warning float-right">Thêm sản phẩm</a>
@endsection

@section('main-content')
    <div class="col-md-12 px-3 pt-4 pb-5" style="background-color: white; border-radius: 5px;">
        <form action="{!! route('product.list') !!}" method="get" id="product_form">
            @csrf
            <div class="form-body">
                <h5>
                    Lọc theo:
                </h5>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group mb-4">
                            <label for="exampleFormControlSelect1">Dòng sản phẩm</label>
                            <select name="category_id" class="form-control" id="categorySelect">
                                <option value="0">All</option>
                                @foreach($categories as $cate)
                                    <option value="{{$cate->id}}" {{$cate->id == $category_id ? 'selected':''}}>{{$cate->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Thời gian</label>
                            <input type="text" name="dates" class="form-control">
                            <input type="hidden" name="start">
                            <input type="hidden" name="end">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Từ khóa</label>
                            <input value="{{$keyword}}" type="text" name="keyword" class="form-control" placeholder="Search by keyword">
                            <input type="submit" style="visibility: hidden;" />
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-12 px-3 py-4 mt-3" style="background-color: white; border-radius: 5px;">
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
            @foreach($list as $prd)
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
                        <a href="{!! route('product.delete', $prd->id) !!}" class="text-danger mr-1" id="btn-delete">Delete</a>
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
            {{ $list->links() }}
        </div>
    </div>
@endsection

@section('main-script')
    <script>
        $("a#btn-delete").click(function (evt) {
            evt.preventDefault();
            const confirm = window.confirm("Are you sure to delete product?");
            if(confirm === true) {
                let linkLocation = $(this).attr("href");
                $.ajax({
                    url: linkLocation,
                    success: window.location.reload(),
                });
            }
        });
    </script>

    <script>
        $('input[name="dates"]').daterangepicker(
            {
                locale: {
                    format: 'DD/MM/YYYY'
                },
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }
        );
        $('#categorySelect').change(function () {
            $('#product_form').submit();
        })
        $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
            $('input[name="start"]').val(picker.startDate.format('YYYY-MM-DD'));
            $('input[name="end"]').val(picker.endDate.format('YYYY-MM-DD'));
            $('#product_form').submit();
        });
    </script>
@endsection
