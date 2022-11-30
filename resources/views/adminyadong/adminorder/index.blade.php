@extends('layouts.adminyadong.main')

@section('content')
<div class="container">
    <div class="row">
        <!-- @include('admin.sidebar') -->

        <div class="col-md-9">
            <div class="card">
                <div class="card-header py-3">
                    <h6 class="m-1 font-weight-bold text-primary">ประวัติการสั่งซื้อ</h6>
                </div>
                <br>
                <div class="card-body">
                    <!-- <a href="{{ url('/cusorder/create') }}" class="btn btn-success btn-sm" title="Add New Cusorder">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a> -->

                    <!-- <form method="GET" action="{{ url('/cusorder') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form> -->

                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>รหัสผู้ใช้</th>
                                    <th>ชื่อสินค้า</th>
                                    <th>จำนวน</th>
                                    <th>ราคา</th>
                                    <th>สถานะ</th>
                                    <th>รับออเดอร์</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cusorder as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->user_id }}</td>
                                    <td>{{ $item->nameproduct }}</td>
                                    <td>{{ $item->amount }}</td>
                                    <td>{{ $item->price }}</td>

                                    <form method="POST" action="{{ url('/adminorder/' . $item->id) }}" id="statusForm{{$item->id}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                        {{ method_field('PATCH') }}
                                        {{ csrf_field() }}

                                        <td>{{ $item->status }}</td>
                                        <!-- เปลี่ยนสถานะด้วย checkbox -->
                                        <td><button class="btn btn-success btn-sm" value="{{isset($item['status']) && $item['status'] == 'รอดำเนินการ' ? 'รับออเดอร์' : 'รอดำเนินการ'}}" type="text" name="status" 
                                        onchange="document.getElementById('statusForm{{$item->id}}').submit()">รับออเดอร์</button></td>
                                    </form>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $cusorder->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Laravel Update Status Using Toggle Button -->
<script>
    $(document).ready(function() {
        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');
            $.ajax({

                type: "GET",
                dataType: "json",
                url: '/changeStatus',
                data: {
                    'status': status,
                    'id': id
                },
                success: function(data) {
                    console.log(data.success)
                }
            });
        })
    });
</script>