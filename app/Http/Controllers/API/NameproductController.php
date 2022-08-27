<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class NameproductController extends Controller
{
        // ดึงข้อมูลหมวดหมู่รายรับ
        public function nameProduct()
        {
            $nameproduct = Product::get();
            return $nameproduct;
        }
          

}