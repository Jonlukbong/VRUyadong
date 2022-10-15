@extends('layouts.adminyadong.main')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('/admin_customer/finance/' . $users->id) }}" title="Back"><button class="btn btn-primary btn-sm"></i>รายวัน</button></a>
                    <a href="{{ url('/admin_customer/finance2/' . $users->id) }}" title="Back"><button class="btn btn-primary btn-sm"></i>รายเดือน</button></a>

                    <br><br>สรุปผลกำไรรายเดือน
                </div>
                <div class="card-body">


                    <br />
                    <br />
                    <div class="table-responsive">

                        <?php $sumone2 = 0.0; ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>เดือน</th>
                                    <th>ผลรวมกำไรทั้งหมด</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($finance2 as $item)
                                <tr>
                                    <td>{{ $item->created_at->toDateString() }}</td>
                                    <td>{{ $item->sum2 }}</td>

                                </tr>
                                <?php $sumone2 += $item->sum2; ?>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $finance2->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>
                    <hr>

                    <div><a><b>สรุปผลกำไรทั้งหมด</b></a>&nbsp;&nbsp;&nbsp;<a>{{ $sumone2 }}</a>&nbsp;&nbsp;&nbsp;<b>บาท</b></div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection