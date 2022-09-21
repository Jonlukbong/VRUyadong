<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Finance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;
        $user_id = Auth::id();

        if (!empty($keyword)) {
            $finance = Finance::where('revenue', 'LIKE', "%$keyword%")
                ->orWhere('expenses', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $finance = Finance::where('user_id','=',$user_id) 
            ->latest()->paginate($perPage);
        }

        $sumone = Finance::where('user_id','=',$user_id)
                ->sum('sum');

        return view('finance.index', compact('finance','sumone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('finance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();

        $user_id = Auth::id();
        $requestData["user_id"] = $user_id;
        $requestData["sum"] = $requestData["revenue"] - $requestData["expenses"];
        
        Finance::create($requestData);

        return redirect('finance')->with('flash_message', 'Finance added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $finance = Finance::findOrFail($id);

        return view('finance.show', compact('finance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $finance = Finance::findOrFail($id);

        return view('finance.edit', compact('finance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $finance = Finance::findOrFail($id);
        $requestData["sum"] = $requestData["revenue"] - $requestData["expenses"];
        $finance->update($requestData);
        
        return redirect('finance')->with('flash_message', 'Finance updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Finance::destroy($id);

        return redirect('finance')->with('flash_message', 'Finance deleted!');
    }
}
