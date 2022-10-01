<?php

namespace App\Http\Controllers\Dealer;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Promotion;
use App\Models\Product;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $promotion = Promotion::where('promotion', 'LIKE', "%$keyword%")
                ->orWhere('picture', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $promotion = Promotion::latest()->paginate($perPage);
        }

        return view('dealer.index', compact('promotion'));
    }
}
