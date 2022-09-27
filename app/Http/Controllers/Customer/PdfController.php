<?php

namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index(Request $request)
    {
       
        return view('finance2.report');
    }
}
