<?php

namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use App\User;
use \PDF;
use App\Models\Finance2;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PdfController extends Controller
{
    public function index(Request $request)
    {
       
        return view('finance2.report');
    }
    public function report(Request $request ,$id)
    {
          //ค้นหาตาม pk
          $users = Finance2::findOrFail($id);


          $finance2 = Finance2::where('user_id','=',$users->id) 
          ->latest();
      

          
         $compact = compact('users','finance2');


         $pdf = PDF::loadView('finance2.report', $compact ,);
         return @$pdf->stream('report.pdf');

        // return view('pdf.medic_pdf'  , compact('users'));
    }
}