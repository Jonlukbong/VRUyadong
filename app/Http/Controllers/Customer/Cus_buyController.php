<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\cusbuy;
use App\Models\Product;
use App\Models\Cusorder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\DB;

class Cus_buyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {

        $perPage = 25;
        $user_id = Auth::id();

        $cusbuy = cusbuy::where('user_id', '=', $user_id)
            ->where('status', '=', 'show')
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);


        return view('customer.cus_buy.index', compact('cusbuy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $allproduct = Product::get();
        return view('customer.cus_buy.create', compact('allproduct'));
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
        $product = Product::where('id', $requestData["nameproduct"])->first();
        $requestData["nameproduct"] = $product->nameproduct;
        $requestData["price"] = $requestData["amount"] * $product->price;
        $requestData["status"] = "show";

        //บันทึกลงตาราง
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
        // echo "<pre>";
        // print_r($cusbuy);
        // echo "<pre>";
        // exit();

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
        $allproduct = Product::where('id', $requestData["nameproduct"])->first();
        $requestData["nameproduct"] = $allproduct->nameproduct;
        $requestData["price"] = $requestData["amount"] * $allproduct->price;

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

    public function drop($id)
    {
        $product = cusbuy::findOrFail($id);
        $requestData["status"] = "drop";

        //บันทึกลงตาราง
        $product->update($requestData);

        return redirect('Cus_buy')->with('flash_message', 'Product drop!');
    }

    public function buy_all()
    {
        //มีการล็อคอินเข้าไอดี
        $user_id = Auth::user()->id;

        $cus_buyall = cusbuy::where('user_id', '=', $user_id)
            ->where('status', '=', 'show')
            ->get();

        //เอาarrayมาวนลูบ
        foreach ($cus_buyall as $key1) {

            DB::table('cusbuy')
                ->where('id', '=', $key1->id)
                ->update([
                    "status" => "order"
                ]);

            $requestData["nameproduct"] = $key1->nameproduct;
            $requestData["amount"] = $key1->amount;
            $requestData["price"] = $key1->price;
            $requestData["picture"] = $key1->picture;
            $requestData["idproduct"] = $key1->idproduct;
            $requestData["user_id"] = $key1->user_id;
            $requestData["status"] = "รอดำเนินการ";

            //บันทึกลงตาราง
            cusorder::create($requestData);
        }



        return redirect('/cusorder')->with('flash_message', 'Product drop!');
    }
}
