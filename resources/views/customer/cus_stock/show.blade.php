@extends('layouts.customer.main')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md">
                <div class="card">
                    <div class="card-header">Product {{ $product2->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/Cus_stock') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/Cus_stock/' . $product2->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('Cus_stock' . '/' . $product2->id) }}" accept-charset="UTF-8" style="display:inline">
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
                                        <th>ID</th><td>{{ $product2->id }}</td>
                                    </tr>
                                    <tr><th> Nameproduct </th><td> {{ $product2->nameproduct }} </td></tr><tr><th> Amount </th><td> {{ $product2->amount }} </td></tr><tr><th> Price </th><td> {{ $product2->price }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
