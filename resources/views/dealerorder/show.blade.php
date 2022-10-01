@extends('layouts.dealer.main')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md">
                <div class="card">
                    <div class="card-header">Product {{ $dealerorder->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/dealerorder') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/dealerorder/' . $dealerorder->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('dealerorder' . '/' . $dealerorder->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $dealerorder->id }}</td>
                                    </tr>
                                    <tr><th> Nameproduct </th><td> {{ $dealerorder->nameproduct }} </td></tr><tr><th> Amount </th><td> {{ $dealerorder->amount }} </td></tr><tr><th> Price </th><td> {{ $dealerorder->price }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
