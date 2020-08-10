@extends('admin.layout_admin_master')

@section('main-header')
    <h1>Đơn hàng <small>danh sách</small></h1>
    <a href="#" class="btn btn-warning float-right">Thêm đơn hàng</a>
@endsection

@section('main-content')
    <div class="col-md-12 px-3 pt-4" style="background-color: white; border-radius: 5px;">
        <form action="{!! route('order.list') !!}" method="get" id="order_form">
            @csrf
            <div class="form-body">
                <h5>
                    Lọc theo:
                </h5>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group mb-4">
                            <label for="exampleFormControlSelect1">Trạng thái</label>
                            <select name="status" class="form-control" id="orderStatusSelect">
                                <option value="0" selected>All</option>
                                <option value="1" {{$status == 1 ? 'selected':''}}>Đang chờ xử lý</option>
                                <option value="2" {{$status == 2 ? 'selected':''}}>Đã xác nhận</option>
                                <option value="3" {{$status == 3 ? 'selected':''}}>Đang vận chuyển</option>
                                <option value="4" {{$status == 4 ? 'selected':''}}>Hoàn thành</option>
                                <option value="5" {{$status == 5 ? 'selected':''}}>Hủy</option>
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
                <th>Code</th>
                <th>Khách hàng</th>
                <th>SĐT</th>
                <th>Tổng tiền</th>
                <th>Ngày đặt</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            </thead>

            <tbody>
            @foreach($list as $od)
                <tr>
                    <td class="border-top-0 px-2 py-4">
                        {{$od->od_code}}
                    </td>
                    <td class="border-top-0 px-2 py-4">
                        {{$od->ship_name}}
                    </td>
                    <td class="border-top-0 px-2 py-4">
                        {{$od->ship_phone}}
                    </td>
                    <td class="border-top-0 px-2 py-4">
                        {{number_format($od->od_total_price, 0, '', '.')}}
                    </td>
                    <td class="border-top-0 px-2 py-4">
                        {{$od->created_at}}
                    </td>
                    <td class="border-top-0 px-2 py-4">
                        @if ($od->od_status == 2)
                            Đã xác nhận
                        @elseif ($od->od_status == 3)
                            Đang vận chuyển
                        @elseif ($od->od_status == 4)
                            Hoàn thành
                        @elseif ($od->od_status == 5)
                            Hủy
                        @else
                            Đang chờ xử lý
                        @endif
                    </td>
                    <td class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                        <a href="#" class="text-primary mr-1">Detail</a>
                        <a href="#" class="text-orange mr-1">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>

            <tfoot>
            <tr>
                <th>Code</th>
                <th>Khách hàng</th>
                <th>SĐT</th>
                <th>Tổng tiền</th>
                <th>Ngày đặt</th>
                <th>Trạng thái</th>
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
{{--    <script>--}}
{{--        $("a#btn-delete").click(function (evt) {--}}
{{--            evt.preventDefault();--}}
{{--            const confirm = window.confirm("Are you sure to delete product?");--}}
{{--            if(confirm === true) {--}}
{{--                let linkLocation = $(this).attr("href");--}}
{{--                $.ajax({--}}
{{--                    url: linkLocation,--}}
{{--                    success: window.location.reload(),--}}
{{--                });--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}

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
        $('#orderStatusSelect').change(function () {
            $('#order_form').submit();
        })
        $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
            $('input[name="start"]').val(picker.startDate.format('YYYY-MM-DD'));
            $('input[name="end"]').val(picker.endDate.format('YYYY-MM-DD'));
            $('#order_form').submit();
        });
    </script>
@endsection




