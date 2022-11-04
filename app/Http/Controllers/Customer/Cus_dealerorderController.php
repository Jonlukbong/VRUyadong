<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\User;
use App\Models\Dealerorder;
use App\Models\Product;
use Illuminate\Http\Request;

class Cus_dealerorderController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 25;
        $user_id = Auth::user()->id ;

        $dealerorder = Dealerorder::latest()->paginate($perPage);

        return view('customer.cus_dealerorder.index', compact('dealerorder'));
    }
}
