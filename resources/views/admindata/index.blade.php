@extends('layouts.adminyadong.main')

@section('content')
<div class="container">
    <div class="row">
        <!-- @include('admin.sidebar') -->

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">จัดการข้อมูลแอดมิน</div>
                <div class="card-body">
                    <!-- <a href="{{ url('/admindata/create') }}" class="btn btn-success btn-sm" title="Add New Admindatum">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a> -->

                    
                    <div class="table-responsive">

                        <div class="table-responsive">
                            <table class="table table-user-information">
                                <tbody>
                                    @foreach($admindata as $item)

                                    <a href="{{ url('/admindata/' . $item->id . '/edit') }}" title="Edit Admindatum">
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"> </i> แก้ไขข้อมูล</button></a><br/>
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

                        <div class="pagination-wrapper"> {!! $admindata->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection