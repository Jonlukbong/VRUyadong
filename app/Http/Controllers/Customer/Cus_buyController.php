<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\cusbuy;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Console;

class Cus_buyController extends Controller
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
            $cusbuy = cusbuy::where('nameproduct', 'LIKE', "%$keyword%")
                ->orWhere('amount', 'LIKE', "%$keyword%")
                ->orWhere('price', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $cusbuy = Product::leftJoin('cusbuy','products.id','=','cusbuy.user_id')
            ->select( 'products.*','cusbuy.*')
            ->where('cusbuy.user_id','=',$user_id)
            ->orderBy('created_at','desc')->paginate($perPage);
            
        }

        return view('customer.cus_buy.index', compact('cusbuy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('customer.cus_buy.create');
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

        if($requestData["nameproduct"] = 'โด่ไม่รู้ล้ม'){
             $requestData["idproduct"] = '1';
        }else if($requestData["nameproduct"] = 'นารีรำพึง'){
             $requestData["idproduct"] = '5';
        }else if($requestData["nameproduct"] = 'ม้ากระทืบโรง'){
             $requestData["idproduct"] = '6';
        }else if($requestData["nameproduct"] = 'กำลังเสือโคร่ง'){
             $requestData["idproduct"] = '7';
        }
        
        cusbuy::create($requestData);

        return redirect('Cus_buy')->with('flash_message', 'Product added!');
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
        $cusbuy = cusbuy::findOrFail($id);

        return view('customer.cus_buy.show', compact('cusbuy'));
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
        $cusbuy = cusbuy::findOrFail($id);

        return view('customer.cus_buy.edit', compact('cusbuy'));
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
        
        $product = cusbuy::findOrFail($id);
        $product->update($requestData);

        return redirect('Cus_buy')->with('flash_message', 'Product updated!');
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
        cusbuy::destroy($id);

        return redirect('Cus_buy')->with('flash_message', 'Product deleted!');
    }
}
