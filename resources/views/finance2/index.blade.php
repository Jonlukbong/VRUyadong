@extends('layouts.customer.main')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('/finance') }}" title="Back"><button class="btn btn-primary btn-sm"></i>รายวัน</button></a>
                    <a href="{{ url('/finance2') }}" title="Back"><button class="btn btn-primary btn-sm"></i>รายเดือน</button></a>
                    <a href="{{ url('/finance2/report') }}" title="Back"><button class="btn btn-primary btn-sm" style="float: right;"></i>พิมพ์รายงาน</button></a>
                    <br><br>สรุปผลกำไรรายเดือน 
                </div>
                <div class="card-body">
                    <a href="{{ url('/finance2/create') }}" class="btn btn-success btn-sm" title="Add New Finance2">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>

                    <br />
                    <br />
                    <div class="table-responsive">

                        <?php $sumone2 = 0.0; ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>เดือน</th>
                                    <th>ผลรวมกำไรทั้งหมด</th>
                                    <th>แก้ไข</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($finance2 as $item)
                                <tr>
                                    <td>{{ $item->created_at->toDateString() }}</td>
                                    <td>{{ $item->sum2 }}</td>
                                    <td>

                                        <a href="{{ url('/finance2/' . $item->id . '/edit') }}" title="Edit Finance2"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไข</button></a>

                                        <form method="POST" action="{{ url('/finance2' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Finance2" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบข้อมูล</button>
                                        </form>
                                    </td>
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