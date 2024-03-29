@extends('layouts.adminyadong.main')

@section('content')

<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-1 font-weight-bold text-primary">ข้อมูลตัวแทนจำหน่าย</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive-sm">

        <!-- จำกัดหน้าแสดงข้อมูล -->
        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
          <div class="row">
            <div class="col-sm-12 col-md-10">
              <div class="dataTables_length" id="dataTable_length">
                <!-- <label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select  form-control " value= "{{request('dataTable_length')}}">
                    <option value="guest">-- เลือกประเภทผู้ใช้ --</option>
                    <option value="volunteer">อาสาสมัคร</option>
                    <option value="medic">หมอ</option>
                    <option value="admin">แอดมิน</option>
                  </select> entries</label> -->
              </div>
            </div>

            <!-- ค้นหา -->
            <div class="col-sm-12 col-md-2">
              <form method="GET" action="{{ url('/admin_customer') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                <div class="input-group">
                  <input type="text" class="form-control form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                  <span class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                      <i class="fa fa-search"></i>
                    </button>
                  </span>
                </div>
              </form>
            </div>
          </div>
        </div>

        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">

          <table class="table dataTable">
            <thead>
              <tr>
                <th>#</th>
                <th>ชื่อในเว็บ</th>
                <th>อีเมล</th>
                <th>สถานะ</th>
                <th>แก้ไขข้อมูล</th>
                <th>เช็คยอดขาย</th>
              </tr>
            </thead>
            @foreach($users as $item)
            <tbody>
              <td>{{ $loop->iteration }}</td>
              <td> {{ $item->name  }}</td>
              <td> {{ $item->email  }}</td>
              <td> {{ $item->role  }}</td>
              <td>
                <a href="{{ url('/admin_user/' . $item->id . '/show') }}" title="Show"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>ตรวจสอบหน้าร้าน</button></a>
                <a href="{{ url('/admin_user/' . $item->id . '/edit') }}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไขข้อมูล</button></a>
                <form method="POST" action="{{ url('/admin_customer' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                  {{ method_field('DELETE') }}
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-danger btn-sm" title="Delete Crud" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>ลบข้อมูล</button>
                </form>
              </td>
              <td><a href="{{ url('/admin_customer/finance/' . $item->id) }}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>เช็คยอดขาย</button></a></td>
            </tbody>
            @endforeach
          </table>
          <div class="pagination-wrapper"> {!! $users->appends(['search' => Request::get('search')])->render() !!} </div>

      </div>
    </div>
  </div>
</div>
@endsection