<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Product;
use Illuminate\Http\Request;

class Customer_branchController extends Controller
{
    public function index(Request $request)
    {
        
        return view('customer.customer_branch');
    }
}
