<?php

namespace App\Http\Controllers\Dealer;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\User;
use App\Models\Product;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 20;

        $branch = User::where('role', '=', 'customer')
            ->latest()->paginate($perPage);


        return view('dealer.branch', compact('branch'));
    }

    public function create()
    {
        return view('dealer.branch.create');
    }

    public function store(Request $request)
    {

        $requestData = $request->all();
        if ($request->hasFile('picture')) {
            $requestData['picture'] = $request->file('picture')
                ->store('uploads', 'public');
        }

        User::create($requestData);

        return redirect('dealer.branch')->with('flash_message', 'Promotion added!');
    }

    public function edit($id)
    {
        $branch = User::findOrFail($id);

        return view('dealer.branch', compact('branch'));
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

        return redirect('dealer.branch')->with('flash_message', 'updated!');
    }
}
