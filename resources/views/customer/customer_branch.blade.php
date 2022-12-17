@extends('layouts.customer.main')

@section('content')
<center>
    <div class="card col-6">
        <div class="card-header py-3">
            <div class="row">
                @if($branch->status_store == 'on')
                <h6 class="m-1 font-weight-bold text-success">เปิด</h6>
                @else
                <h6 class="m-1 font-weight-bold text-danger">ปิด</h6>
                @endif
                <h6 class="m-1 font-weight-bold text-primary">ข้อมูลร้าน</h6>
            </div>
        </div>
        <br>

        <div>
            <div><img src="{{ url('storage/'.$branch->picture )}}" alt="" width="250" height="250"></div><br>
            <table class="table table-user-information">
                <tbody>
                    <tr>
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                ชื่อร้าน
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{ $branch->namestore }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-user  text-primary"></span>
                                ที่อยู่
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{ $branch->address }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-cloud text-primary"></span>
                                เบอร์โทรศัพท์
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{ $branch->phone }}
                        </td>
                    </tr>

                    </tr>
                </tbody>
            </table>
            <div style="text-align: center">
                <a href="{{ url('customer_branch/' . $branch->id . '/edit') }}" title="Edit Crud"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไขข้อมูล</button></a>
            </div><br>
        </div>
    </div>
</center>
@endsection