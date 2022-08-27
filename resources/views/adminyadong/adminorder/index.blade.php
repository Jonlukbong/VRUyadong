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
                                    <td>{{ $item->status }}</td>
                                    <!-- <td>
                                            <a href="{{ url('/cusorder/' . $item->id) }}" title="View Cusorder"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/cusorder/' . $item->id . '/edit') }}" title="Edit Cusorder"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/cusorder' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Cusorder" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td> -->
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