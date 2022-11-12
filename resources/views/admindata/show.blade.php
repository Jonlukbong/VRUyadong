@extends('layouts.adminyadong.main')

@section('content')
    <div class="container">
        <div class="row">
            <!-- @include('admin.sidebar') -->

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Admindatum {{ $admindatum->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admindata') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admindata/' . $admindatum->id . '/edit') }}" title="Edit Admindatum"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admindata' . '/' . $admindatum->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Admindatum" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $admindatum->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $admindatum->name }} </td></tr><tr><th> Surname </th><td> {{ $admindatum->surname }} </td></tr><tr><th> Number </th><td> {{ $admindatum->number }} </td></tr><tr><th> Picture </th><td> {{ $admindatum->picture }} </td></tr><tr><th> Line </th><td> {{ $admindatum->line }} </td></tr><tr><th> Facebook </th><td> {{ $admindatum->facebook }} </td></tr><tr><th> Emall </th><td> {{ $admindatum->emall }} </td></tr><tr><th> Address </th><td> {{ $admindatum->address }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
