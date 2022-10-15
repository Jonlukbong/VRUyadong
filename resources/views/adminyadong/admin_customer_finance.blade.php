@extends('layouts.adminyadong.main')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('/admin_customer/finance/' . $users->id) }}" title="Back"><button class="btn btn-primary btn-sm"></i>รายวัน</button></a>
                    <a href="{{ url('/admin_customer/finance2/' . $users->id) }}" title="Back"><button class="btn btn-primary btn-sm"></i>รายเดือน</button></a>
                    <br><br>สรุปผลกำไรรายวัน
                </div>
                <div class="card-body">

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
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($finance as $item)
                                <tr>
                                    <td>{{ $item->created_at->toDateString() }}</td>
                                    <td>{{ $item->revenue }}</td>
                                    <td>{{ $item->expenses }}</td>
                                    <td>{{ $item->sum }}</td>

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