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

    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
                if ($request->hasFile('picture')) {
            $requestData['picture'] = $request->file('picture')
                ->store('uploads', 'public');
        }

        $dealerorder = Dealerorder::findOrFail($id);
        // if ($requestData['status'])
        $dealerorder->update($requestData);

        return redirect('cus_dealerorder')->with('flash_message', 'cus_dealerorder updated!');
    }
}
