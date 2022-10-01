@extends('layouts.dealer.main')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md">
                <div class="card">
                    <div class="card-header">Edit Product #{{ $dealerorder->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/dealerorder/' . $dealerorder->id) }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/dealerorder/' . $dealerorder->id . '/update') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('dealerorder.form_edit', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
