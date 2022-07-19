@extends('layouts.customer.main')

@section('content')
<div class="card">
    <div class="card-header py-3">
        <h6 class="m-1 font-weight-bold text-primary">ข้อมูลร้าน</h6>
    </div>
    <br>
    <div class="container bootstrap snippets bootdey">
        <div class="panel-body inf-content">
            <div class="row">
                <div class="col-md-6">

                    <div class="table-responsive">
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

                    </div>
                    <div style="text-align: center">
                        <a href="{{ url('customer_branch/' . $branch->id . '/edit') }}" title="Edit Crud"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไขข้อมูล</button></a>
                    </div><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection