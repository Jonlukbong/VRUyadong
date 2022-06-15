<?php

namespace App\Http\Controllers\Adminyadong;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Product;
use Illuminate\Http\Request;


class Admin_customerController extends Controller
{
    public function index(Request $request)
    {
        
        return view('adminyadong.admin_customer');
    }
}
