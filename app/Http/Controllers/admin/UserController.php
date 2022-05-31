<?php

namespace App\Http\Controllers\User;
use app\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::first();
        return view('user.index' , compact('user'));

    
    }
}
