<?php

namespace App\Http\Controllers\Dealer;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Product;
use App\Models\Admindatum;
use Illuminate\Http\Request;

class Dealer_contactController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 25;
        $Admindata = Admindatum::latest()->paginate($perPage);
        
        return view('dealer.dealer_contact', compact('Admindata'));
    }
}
