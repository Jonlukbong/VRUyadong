<?php

namespace App\Http\Controllers\Dealer;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Product;
use Illuminate\Http\Request;

class Dealer_productController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 25;
        $product = Product::latest()->paginate($perPage);

        return view('dealer.dealer_product', compact('product'));
    }
}
