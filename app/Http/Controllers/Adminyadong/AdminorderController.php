<?php

namespace App\Http\Controllers\Adminyadong;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\User;
use App\Models\Cusorder;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminorderController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 25;
        $user_id = Auth::user()->id ;

        $cusorder = Cusorder::latest()->paginate($perPage);

        return view('adminyadong.adminorder.index', compact('cusorder'));
    }

    public function changeStatus(Request $request)
    {
        $cusorder =Cusorder::findorFail($request->id);
        $cusorder->status = $request->status;
        $cusorder->save();

        return response()->json(['success'=>'Status change successfully.']);
    }

    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
                if ($request->hasFile('picture')) {
            $requestData['picture'] = $request->file('picture')
                ->store('uploads', 'public');
        }

        $cusorder = Cusorder::findOrFail($id);
        // if ($requestData['status'])
        $cusorder->update($requestData);

        return redirect('adminorder')->with('flash_message', 'Adminorder updated!');
    }
}
