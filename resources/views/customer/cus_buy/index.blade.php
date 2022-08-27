@extends('layouts.customer.main')

@section('content')
<div class="container">
    <div class="row">


        <div class="col-md">
            <div class="card">
                <div class="card-header py-3">
                    <h6 class="m-1 font-weight-bold text-primary">รายการสินค้าที่เลือก</h6>
                </div>
                <div class="card-body">
                    <a href="{{ url('/Cus_buy/create') }}" class="btn btn-success btn-sm" title="Add New Product">
                        <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มสินค้า
                    </a>

                    <br />
                    <br />
                    <div class="table-responsive">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nameproduct</th>
                                    <th>Amount</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cusbuy as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nameproduct }}</td>
                                    <td>{{ $item->amount }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>
                                        <!-- <a href="{{ url('/Cus_buy/' . $item->id) }}" title="View Product"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> -->
                                        <a href="{{ url('/Cus_buy/' . $item->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        <a href="{{ url('/Cus_buy/' . $item->id . '/drop') }}" title="drop Product"><button class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i> drop</button></a>

                                        <!-- <form method="POST" action="{{ url('/Cus_buy' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form> -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <div class="crad-body">
                            <a style="float: right;" href="{{ url('/cus_order/buy_all') }}" class="btn btn-danger btn-sm">
                                <i class="fas fa-cart-arrow-down"></i> สั่งซื้อสินค้า

                            </a>
                        </div>

                        <div class="pagination-wrapper"> {!! $cusbuy->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection