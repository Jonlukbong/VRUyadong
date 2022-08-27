@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Cusorder {{ $cusorder->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/cusorder') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/cusorder/' . $cusorder->id . '/edit') }}" title="Edit Cusorder"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('cusorder' . '/' . $cusorder->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Cusorder" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $cusorder->id }}</td>
                                    </tr>
                                    <tr><th> Nameproduct </th><td> {{ $cusorder->nameproduct }} </td></tr><tr><th> Amount </th><td> {{ $cusorder->amount }} </td></tr><tr><th> Price </th><td> {{ $cusorder->price }} </td></tr><tr><th> Picture </th><td> {{ $cusorder->picture }} </td></tr><tr><th> Idproduct </th><td> {{ $cusorder->idproduct }} </td></tr><tr><th> User Id </th><td> {{ $cusorder->user_id }} </td></tr><tr><th> Status </th><td> {{ $cusorder->status }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
