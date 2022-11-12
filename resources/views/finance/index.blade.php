@extends('layouts.customer.main')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('/finance') }}" title="Back"><button class="btn btn-primary btn-sm" ></i>รายวัน</button></a>
                    <a href="{{ url('/finance2') }}" title="Back"><button class="btn btn-primary btn-sm" ></i>รายเดือน</button></a>
                    <br><br>สรุปผลกำไรรายวัน
                </div>
                <div class="card-body">
                    <a href="{{ url('/finance/create') }}" class="btn btn-success btn-sm" title="Add New Finance">
                        <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มข้อมูล
                    </a>

                    <!-- <form method="GET" action="{{ url('/finance') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                    <th>วันที่</th>
                                    <th>รายรับ</th>
                                    <th>รายจ่าย</th>
                                    <th>กำไร</th>
                                    <th>แก้ไข</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($finance as $item)
                                <tr>
                                    <td>{{ $item->created_at->toDateString() }}</td>
                                    <td>{{ $item->revenue }}</td>
                                    <td>{{ $item->expenses }}</td>
                                    <td>{{ $item->sum }}</td>
                                    <td>
                                        
                                        <a href="{{ url('/finance/' . $item->id . '/edit') }}" title="Edit Finance"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไข</button></a>

                                        <form method="POST" action="{{ url('/finance' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Finance" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบข้อมูล</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $finance->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>
                    <hr>

                    <div><a><b>สรุปผลกำไรทั้งหมด</b></a>&nbsp;&nbsp;&nbsp;<a>{{ $sumone }}</a>&nbsp;&nbsp;&nbsp;<b>บาท</b></div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection