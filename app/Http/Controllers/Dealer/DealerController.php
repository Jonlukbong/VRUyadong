<?php

namespace App\Http\Controllers\Dealer;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Product;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    public function index(Request $request)
    {
        // $keyword = $request->get('search');
        // $perPage = 25;

        // if (!empty($keyword)) {
        //     $product = Product::where('nameproduct', 'LIKE', "%$keyword%")
        //         ->orWhere('amount', 'LIKE', "%$keyword%")
        //         ->orWhere('price', 'LIKE', "%$keyword%")
        //         ->latest()->paginate($perPage);
        // } else {
        //     $product = Product::latest()->paginate($perPage);
        // }

        return view('dealer.index');
    }
}
