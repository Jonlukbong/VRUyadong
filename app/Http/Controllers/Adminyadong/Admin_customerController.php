<?php

namespace App\Http\Controllers\Adminyadong;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\User;
use App\Models\Product;
use Illuminate\Http\Request;


class Admin_customerController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('role:admin');
    // }

  
    public function index(Request $request)
    {
        $perPage = 25;
        $keyword = $request->get('search'); 
        $type = $request->get('dataTable_length');
        switch(Auth::user()->role)
        {
                case "admin" : 
                   
                    if (!empty($keyword)) {
                        // $users = User::where('user_id', 'LIKE', "%$keyword%")
                            $users = User::Where('name', 'LIKE', "%$keyword%")
                            // ->orWhere('email', 'LIKE', "%$keyword%")
                            ->orwhere('role', 'LIKE',"%$keyword%" )
                            ->latest()->paginate($perPage);
                    } else {
                        $users = User::where('role', "customer")
                        ->latest()->paginate($perPage);
                    }
                    break;
            default : 
                //means guest
                $users = User::where('id',Auth::id() )->latest()->paginate($perPage);      
        }  
        
        return view('adminyadong.admin_customer', compact('users'));

    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

 
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $users = User::findOrFail($id);

        return view('adminyadong.admin_customer.edit', compact('users'));
    }

   
    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        
        $users = User::findOrFail($id);
        $users->update($requestData);

        return redirect('admin_customer')->with('flash_message', 'updated!');
    }

  
    public function destroy($id)
    {
        User::destroy($id);

        return redirect('admin_customer')->with('flash_message', 'deleted!');
    }
}
