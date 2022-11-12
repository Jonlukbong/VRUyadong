<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests;


use App\Models\Admindatum;
use App\Models\Product;
use Illuminate\Http\Request;

class Customer_contactController extends Controller
{
    public function index(Request $request)
    {
   
        $perPage = 25;
        $Admindata = Admindatum::latest()->paginate($perPage);
        
        return view('customer.customer_contact', compact('Admindata'));
    }
}
