@extends('layouts.dealer.main')

@section('content')
<div class="container">
    <div class="row">
        <!-- @include('admin.sidebar') -->

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">จัดการข้อมูลแอดมิน</div>
                <div class="card-body">

                    
                    <div class="table-responsive">

                        <div class="table-responsive">
                            <table class="table table-user-information">
                                <tbody>
                                    @foreach($Admindata as $item)

                                    <td>
                                        <div class="center"><img src="{{ url('storage/'.$item->picture )}}" alt="" width="200" height="200"></div><br>
                                        <tr>
                                            <br>
                                            <td>
                                                <strong>
                                                    <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                                    ชื่อ
                                                </strong>
                                            </td>
                                            <td class="text-primary">
                                                {{ $item->name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>
                                                    <span class="glyphicon glyphicon-cloud text-primary"></span>
                                                    ที่อยู่
                                                </strong>
                                            </td>
                                            <td class="text-primary">
                                                {{ $item->address }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>
                                                    <span class="glyphicon glyphicon-user  text-primary"></span>
                                                    เบอร์โทรศัพท์
                                                </strong>
                                            </td>
                                            <td class="text-primary">
                                                {{ $item->number }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>
                                                    <span class="glyphicon glyphicon-cloud text-primary"></span>
                                                    ID:Line
                                                </strong>
                                            </td>
                                            <td class="text-primary">
                                                {{ $item->line }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>
                                                    <span class="glyphicon glyphicon-cloud text-primary"></span>
                                                    Facebook
                                                </strong>
                                            </td>
                                            <td class="text-primary">
                                                {{ $item->facebook }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>
                                                    <span class="glyphicon glyphicon-cloud text-primary"></span>
                                                    Email
                                                </strong>
                                            </td>
                                            <td class="text-primary">
                                                {{ $item->emall }}
                                            </td>
                                        </tr>
                                        

                                        </tr>
                                    </td>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection