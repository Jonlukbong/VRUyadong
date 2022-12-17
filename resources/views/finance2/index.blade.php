@extends('layouts.customer.main')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="container" id="print">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('/finance') }}" title="Back"><button class="btn btn-primary btn-sm"></i>รายวัน</button></a>
                    <a href="{{ url('/finance2') }}" title="Back"><button class="btn btn-primary btn-sm"></i>รายเดือน</button></a>

                    <br><br>สรุปผลกำไรรายเดือน
                </div>
                <div class="card-body">
                    <a href="{{ url('/finance2/create') }}" class="btn btn-success btn-sm" title="Add New Finance2">
                        <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มข้อมูล
                    </a>
                    <br />
                    <br />

                    <b>ชื่อสาขา {{Auth::user()->namestore}}</b><br>
                    <br />

                    
                    <div class="table-responsive">

                        <?php $sumone2 = 0.0; ?>
                        <table class="table" style="border: 1px solid #e9edf0;">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>เดือน</th>
                                    <th>ผลรวมกำไรทั้งหมด</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($finance2 as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->created_at->toDateString() }}</td>
                                    <td>{{ $item->sum2 }}</td>
                                </tr>
                                <?php $sumone2 += $item->sum2; ?>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $finance2->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>
                    <hr>

                    <div><a><b>สรุปผลกำไรทั้งหมด</b></a>&nbsp;&nbsp;&nbsp;<a>{{ $sumone2 }}</a>&nbsp;&nbsp;&nbsp;<b>บาท</b></div>

                    <!-- <a href="{{ url('/report/' . $user_id ) }}" title="Back"><button class="btn btn-dark btn-sm" style="float: right;"></i>🖨️พิมพ์รายงาน</button></a> -->



                    <!-- <p>Click the button to print the current page.</p> -->

                    <button class="btn btn-dark btn-sm" style="float: right;" onclick="printDiv('print')">🖨️พิมพ์รายงาน</button>
                    <!-- Button trigger modal -->

                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="float: right;">
                        🖨️พิมพ์รายงาน
                    </button> -->
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">🖨️พิมพ์รายงาน</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" id="slip">
                <h4 class="text-center">สรุปผลกำไรรายเดือน</h4><br>
                <b>ชื่อสาขา {{Auth::user()->namestore}}</b><br>
                <div class="table-responsive mt-3">

                    <?php $sumone2 = 0.0; ?>
                    <center>
                        <table class="table col-9" style="border: 1px solid black;">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>เดือน</th>
                                    <th>ผลรวมกำไรทั้งหมด</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($finance2 as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $item->created_at->toDateString() }}</td>
                                    <td>{{ $item->sum2 }}</td>
                                </tr>
                                <?php $sumone2 += $item->sum2; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </center>
                    <div class="pagination-wrapper"> {!! $finance2->appends(['search' => Request::get('search')])->render() !!} </div>
                </div>

                <div style="float: right ;"><a><b>สรุปผลกำไรทั้งหมด</b></a>&nbsp;&nbsp;&nbsp;<a>{{ $sumone2 }}</a>&nbsp;&nbsp;&nbsp;<b>บาท</b></div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-primary" id="download-button">🖨️พิมพ์รายงาน</button>
            </div>
        </div>
    </div>
</div>

@endsection

<script>
    function printDiv(print) {
        var printContents = document.getElementById(print).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>

<!-- <script>
    const button = document.getElementById('download-button');

    function generatePDF() {
        // Choose the element that your content will be rendered to.
        const element = document.getElementById('slip');
        // Choose the element and save the PDF for your user.
        html2pdf().from(element).save();
    }

    button.addEventListener('click', generatePDF);
</script> -->