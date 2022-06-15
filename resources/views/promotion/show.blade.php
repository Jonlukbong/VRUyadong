@extends('layouts.adminyadong.main')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md">
                <div class="card">
                    <div class="card-header">Promotion {{ $promotion->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/promotion') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/promotion/' . $promotion->id . '/edit') }}" title="Edit Promotion"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('promotion' . '/' . $promotion->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Promotion" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $promotion->id }}</td>
                                    </tr>
                                    <tr><th> Promotion </th><td> {{ $promotion->promotion }} </td></tr><tr><th> Picture </th><td> <img src="{{ url('storage/'.$promotion->picture )}}" alt="" width="300" height="200"> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
