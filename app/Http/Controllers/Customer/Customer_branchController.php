<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\User;
use App\Models\customer_branch;
use Illuminate\Http\Request;

class Customer_branchController extends Controller
{
    public function index(Request $request)
    {

        $id = Auth::id();
        $branch = User::findOrFail($id);

        return view('customer.customer_branch', compact('branch'));
    }

    public function create()
    {
        return view('customer_branch.create');
    }

    public function store(Request $request)
    {

        $requestData = $request->all();
        if ($request->hasFile('picture')) {
            $requestData['picture'] = $request->file('picture')
                ->store('uploads', 'public');
        }

        User::create($requestData);

        return redirect('customer_branch')->with('flash_message', 'Promotion added!');
    }

    public function edit($id)
    {
        $branch = User::findOrFail($id);

        return view('customer.customer_branch2', compact('branch'));
    }

    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        if ($request->hasFile('picture')) {
            $requestData['picture'] = $request->file('picture')
                ->store('uploads', 'public');
        }

        $branch = User::findOrFail($id);
        $branch->update($requestData);

        return redirect('customer_branch')->with('flash_message', 'updated!');
    }
}
