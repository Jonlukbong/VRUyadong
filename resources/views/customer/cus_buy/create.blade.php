@extends('layouts.customer.main')

@section('content')
<div class="container">
    <div class="row">


        <div class="col-md">
            <div class="card">
                <div class="card-header py-3">
                <h6 class="m-1 font-weight-bold text-primary">เลือกสินค้า</h6>
                </div>
                <div class="card-body">
                    <a href="{{ url('/Cus_buy') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <br />
                    <br />

                    @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif


                    <div class="container">
                        <div class="row">
                            @foreach($allproduct as $item)
                            <div class="col-3">
                                <!-- รูปสินค้า<br /> -->
                                <b>ชื่อสินค้า:</b> {{ $item->nameproduct }}<br />
                                <b>จำนวน:</b> {{ $item->amount }}<br />
                                <b>ราคา(ต่อลิตร):</b> {{ $item->price }}<br />
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <hr>


                    <form method="POST" action="{{ url('/Cus_buy') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        @include ('customer.cus_buy.form', ['formMode' => 'create'])

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection