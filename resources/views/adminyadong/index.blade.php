@extends('layouts.adminyadong.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header py-3">
                    <h6 class="m-1 font-weight-bold text-primary">ข่าวสาร</h6>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>รูปภาพ</th>
                                <th>โปรโมชั่น</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($promotion as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ url('storage/'.$item->picture )}}" alt="" width="250" height="250"></td>
                                <td>{{ $item->promotion }}</td>
                                
                                <td>
                                    <a href="{{ url('/promotion/' . $item->id) }}" title="View Promotion"></a>
                                    <a href="{{ url('/promotion/' . $item->id . '/edit') }}" title="Edit Promotion"></a>

                                    <!-- <form method="POST" action="{{ url('/promotion' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Promotion" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form> -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-wrapper"> {!! $promotion->appends(['search' => Request::get('search')])->render() !!} </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection