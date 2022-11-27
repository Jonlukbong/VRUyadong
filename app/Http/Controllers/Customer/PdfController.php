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
        $keyword = $request->get('search');
        $perPage = 25;
        $user_id = Auth::id();

        if (!empty($keyword)) {
            $finance2 = Finance2::where('month', 'LIKE', "%$keyword%")
                ->orWhere('sum2', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->where('user_id', '=', $user_id)
                ->latest()->paginate($perPage);
        } else {
            $finance2 = Finance2::where('user_id', '=', $user_id)
                ->latest()->paginate($perPage);
        }
        return view('finance2.report', compact('finance2', 'user_id'));
    }
    public function report(Request $request, $id)
    {
        //ค้นหาตาม pk
        $users = User::findOrFail($id);


        $finance2 = Finance2::where('user_id', '=', $users)
            ->latest();



        $compact = compact('users', 'finance2');


        $pdf = PDF::loadView('finance2.report', $compact);
        return @$pdf->stream('report.pdf');

        // return view('pdf.medic_pdf'  , compact('users'));
    }
}
