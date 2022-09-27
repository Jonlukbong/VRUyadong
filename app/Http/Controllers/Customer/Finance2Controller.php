<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Finance2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Finance2Controller extends Controller
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
            $finance2 = Finance2::where('month', 'LIKE', "%$keyword%")
                ->orWhere('sum2', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->where('user_id','=',$user_id)
                ->latest()->paginate($perPage);
        } else {
            $finance2 = Finance2::where('user_id','=',$user_id) 
            ->latest()->paginate($perPage);
        }

        // $sumone2 = Finance2::where('user_id','=',$user_id)
        //         ->sum('sum2');

        return view('finance2.index', compact('finance2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('finance2.create');
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
        
        Finance2::create($requestData);

        return redirect('finance2')->with('flash_message', 'Finance2 added!');
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
        $finance2 = Finance2::findOrFail($id);

        return view('finance2.show', compact('finance2'));
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
        $finance2 = Finance2::findOrFail($id);

        return view('finance2.edit', compact('finance2'));
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

        
        $finance2 = Finance2::findOrFail($id);
        $finance2->update($requestData);

        return redirect('finance2')->with('flash_message', 'Finance2 updated!');
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
        Finance2::destroy($id);

        return redirect('finance2')->with('flash_message', 'Finance2 deleted!');
    }
}
