@extends('layouts.dealer.main')

@section('content')
<div class="container">
    <div class="row">


        <div class="col-md">
            <div class="card">
                <div class="card-header py-3">
                    <h6 class="m-1 font-weight-bold text-primary">ร้านการสินค้า</h6>
                </div>
                <div class="card-body">
                    <!-- <a href="{{ url('/product/create') }}" class="btn btn-success btn-sm" title="Add New Product">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>

                    <form method="GET" action="{{ url('/product') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form> -->

                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ชื่อสินค้า</th>
                                    <th>จำนวน(ลิตร)</th>
                                    <th>ราคา(ต่อลิตร)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($product as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nameproduct }}</td>
                                    <td>{{ $item->amount }}</td>
                                    <td>{{ $item->price }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $product->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection