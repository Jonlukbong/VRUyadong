@extends('layouts.dealer.main')

@section('content')
<div class="card">
    <div class="card-header py-3">
        <h6 class="m-1 font-weight-bold text-primary">ข้อมูลร้าน</h6>
    </div>
    <div class="container bootstrap snippets bootdey">
        <div class="panel-body inf-content">
            <div class="row">
                <div class="col-md-12">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>สถานะ</th>
                                    <th>ชื่อร้าน</th>
                                    <th>รูปหน้าร้าน</th>
                                    <th>สั่งซื้อสินค้า</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($branch as $item)
                                <tr>
                                    <td> @if($item->status_store == 'on')
                                        <h6 class="m-1 font-weight-bold text-success">ร้านเปิด</h6>
                                        @else
                                        <h6 class="m-1 font-weight-bold text-danger">ร้านปิด</h6>
                                        @endif
                                    </td>
                                    <td>{{ $item->namestore }}</td>
                                    <td><img src="{{ url('storage/'.$item->picture )}}" alt="" width="300" height="200"></td>
                                    <td>
                                        
                                            @if(!empty( $update_2))
                                            <a class="m-1 font-weight-bold text-primary">{{ $update_2 }}
                                                <a href="{{ url('/dealerorder/'. $item->id) }}" title="Back"><button class="btn btn-primary btn-sm" disabled></i>คลิก</button></a>
                                                @else
                                                <a href="{{ url('/dealerorder/'. $item->id) }}" title="Back"><button class="btn btn-primary btn-sm"></i>คลิก</button></a>
                                                @endif
                                        </div>
                                        <br>
                                    </td>


                                </tr>



                                @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection