<?php

namespace App\Http\Controllers\Dealer;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Product;
use Illuminate\Http\Request;

class Dealer_productController extends Controller
{
    public function index(Request $request)
    {
        
        return view('dealer.dealer_product');
    }
}
