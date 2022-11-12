@extends('layouts.customer.main')

@section('content')

<!-- <div class="col-md-10"> -->
<div class="card">
    <div class="card-header"><h6 class="m-1 font-weight-bold text-primary">ข้อมูลสินค้า</h6></div>
    <div class="card-body">

        <!-- หัวข้อที่ 1 -->
        <div class="container px-0">
            <div class="row gx-5">
                <div class="col">
                    <div class="p-2 border bg-light">1.จัดการสต็อกสินค้า</div>
                </div>
            </div>
            <br>
            @if(!empty( $update_1))
            <a class="m-1 font-weight-bold text-primary">{{ $update_1 }}
                <a href="{{ url('/Cus_stock') }}" title="Back"><button class="btn btn-primary btn-sm" disabled></i>คลิก</button></a>
                @else
                <a href="{{ url('/Cus_stock') }}" title="Back"><button class="btn btn-primary btn-sm"></i>คลิก</button></a>
                @endif
        </div>
        <br>

        <!-- หัวข้อที่ 2 -->
        <div class="container px-0">
            <div class="row gx-5">
                <div class="col">
                    <div class="p-2 border bg-light">2.สั่งซื้อสินค้า</div>
                </div>
            </div>
            <br>
            @if(!empty( $update_3))
            <a class="m-1 font-weight-bold text-primary">{{ $update_3 }}
                <a href="{{ url('/Cus_buy') }}" title="Back"><button class="btn btn-primary btn-sm" disabled></i>คลิก</button></a>
                @else
                <a href="{{ url('/Cus_buy') }}" title="Back"><button class="btn btn-primary btn-sm"></i>คลิก</button></a>
                @endif
        </div>
        <br>

        <!-- หัวข้อที่ 3 -->
        <div class="container px-0">
            <div class="row gx-5">
                <div class="col">
                    <div class="p-2 border bg-light">3.ออเดอร์สินค้า</div>
                </div>
            </div>
            <br>
            @if(!empty( $update_2))
            <a class="m-1 font-weight-bold text-primary">{{ $update_2 }}
                <a href="{{ url('/cus_dealerorder') }}" title="Back"><button class="btn btn-primary btn-sm" disabled></i>คลิก</button></a>
                @else
                <a href="{{ url('/cus_dealerorder') }}" title="Back"><button class="btn btn-primary btn-sm"></i>คลิก</button></a>
                @endif
        </div>
        <br>

        <!-- หัวข้อที่ 4 -->
        <div class="container px-0">
            <div class="row gx-5">
                <div class="col">
                    <div class="p-2 border bg-light">4.รายรับรายจ่าย</div>
                </div>
            </div>
            <br>
            @if(!empty( $update_4))
            <a class="m-1 font-weight-bold text-primary">{{ $update_4 }}
                <a href="{{ url('/finance') }}" title="Back"><button class="btn btn-primary btn-sm" disabled></i>คลิก</button></a>
                @else
                <a href="{{ url('/finance') }}" title="Back"><button class="btn btn-primary btn-sm"></i>คลิก</button></a>
                @endif
        </div>
        <br>

    </div>
</div>
@endsection