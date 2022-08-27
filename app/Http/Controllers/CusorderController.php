<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Cusorder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CusorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = 25;
        $user_id = Auth::user()->id ;

        $cusorder = Cusorder::where('user_id' , $user_id)->latest()->paginate($perPage);

        return view('cusorder.index', compact('cusorder'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('cusorder.create');
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
                if ($request->hasFile('picture')) {
            $requestData['picture'] = $request->file('picture')
                ->store('uploads', 'public');
        }

        Cusorder::create($requestData);

        return redirect('cusorder')->with('flash_message', 'Cusorder added!');
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
        $cusorder = Cusorder::findOrFail($id);

        return view('cusorder.show', compact('cusorder'));
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
        $cusorder = Cusorder::findOrFail($id);

        return view('cusorder.edit', compact('cusorder'));
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
                if ($request->hasFile('picture')) {
            $requestData['picture'] = $request->file('picture')
                ->store('uploads', 'public');
        }

        $cusorder = Cusorder::findOrFail($id);
        $cusorder->update($requestData);

        return redirect('cusorder')->with('flash_message', 'Cusorder updated!');
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
        Cusorder::destroy($id);

        return redirect('cusorder')->with('flash_message', 'Cusorder deleted!');
    }

    
}
