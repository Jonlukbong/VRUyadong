@extends('layouts.customer.main')

@section('content')
<div class="card">
    <div class="card-header">ข้อมูลร้าน</div>
    <br>
    <div class="container bootstrap snippets bootdey">
        <div class="panel-body inf-content">

            <div class="row">

                <div class="col-md-7">

                    <div class="col-md-10">
                        <a href="{{ url('/customer_branch') }}" title="Back"><button class="btn btn-info"><i aria-hidden="true"></i>ย้อนกลับ</button></a>
                    </div>

                    <br>
                    <div class="table-responsive">
                        <form method="POST" action="{{ url('customer_branch/' . $branch->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('picture') ? 'has-error' : ''}}">
                                <label for="picture" class="control-label">{{ 'Picture' }}</label>
                                <input class="form-control" name="picture" type="file" id="picture" value="{{ isset($branch->picture) ? $branch->picture : ''}}">
                                {!! $errors->first('picture', '<p class="help-block">:message</p>') !!}
                            </div>


                            <div class="form-group {{ $errors->has('namestore') ? 'has-error' : ''}}">

                                <label for="namestore" class="control-label">{{ 'ชื่อร้าน' }}
                                    <font size="2" color="#FF0000">*</font>
                                </label>
                                <input class="form-control" name="namestore" type="text" id="namestore" value="{{ isset($branch->namestore) ? $branch->namestore : ''}}">
                                {!! $errors->first('namestore', '<p class="help-block">:message</p>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">

                                <label for="address" class="control-label">{{ 'ที่อยู่' }}
                                    <font size="2" color="#FF0000">*</font>
                                </label>
                                <input class="form-control" name="address" type="text" id="address" value="{{ isset($branch->address) ? $branch->address : ''}}">
                                {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
                            </div>

                            <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">

                                <label for="phone" class="control-label">{{ 'เบอร์โทรศัพท์' }}
                                    <font size="2" color="#FF0000">*</font>
                                </label>
                                <input class="form-control" name="phone" type="text" id="phone" value="{{ isset($branch->phone) ? $branch->phone : ''}}">
                                {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
                            </div>

                            <div class="radio">
                                <label><input name="status_store" type="radio" value="on" required @if (isset($branch->status_store)) @endif> เปิด </label>
                                <label><input name="status_store" type="radio" value="off" required @if (isset($branch->status_store)) @endif> ปิด </label>
                            </div>


                            <div class="container-fluid">
                                <div class="row">

                                    <div class="col-md-2">
                                        <input class="btn btn-primary" type="submit" value="บันทึก">
                                    </div>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection