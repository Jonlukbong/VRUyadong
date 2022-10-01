<?php

namespace App\Http\Controllers\Dealer;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Models\Dealerorder;
use App\Models\cusbuy;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\DB;


class DealerorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request,$id)
    {

        $perPage = 25;
        $user_id = Auth::id();
        $cus_id = User::findOrFail($id);

        $dealerorder = Dealerorder::where('user_id', '=', $user_id)
            ->where('status', '=', 'show')
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);


        return view('dealerorder.index', compact('dealerorder','cus_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create($id)
    {
        $allproduct = Product::get();
        $cus_id = User::findOrFail($id);
        return view('dealerorder.create', compact('allproduct','cus_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request,$id)
    {
        $cus_id = User::findOrFail($id);
        $requestData = $request->all();
        $user_id = Auth::id();
        $requestData["user_id"] = $user_id;
        $product = Product::where('id', $requestData["nameproduct"])->first();
        $requestData["nameproduct"] = $product->nameproduct;
        $requestData["price"] = $requestData["amount"] * $product->price;
        $requestData["status"] = "show";
        // $requestData["cus_id"] = $request;
       

        //บันทึกลงตาราง
        Dealerorder::create($requestData);

        return redirect()->back();
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
        $dealerorder = Dealerorder::findOrFail($id);

        return view('dealerorder.show', compact('dealerorder'));
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
        $dealerorder = Dealerorder::findOrFail($id);
        // $cus_id = User::findOrFail($id);

        return view('dealerorder.edit', compact('dealerorder'));
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
        $cus_id = $requestData["cus_id"];

        $dealerorder = Dealerorder::findOrFail($id);
        $allproduct = Product::where('id', $requestData["nameproduct"])->first();
        $requestData["nameproduct"] = $allproduct->nameproduct;
        $requestData["price"] = $requestData["amount"] * $allproduct->price;
        // $requestData["cus_id"] = $cus_id->id;
        $dealerorder->update($requestData);



        return redirect()->route('dealerorder', ['id' => 3]);
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
        Dealerorder::destroy($id);

        return redirect('dealerorder')->with('flash_message', 'Dealerorder deleted!');
    }

    public function drop($id)
    {
        $dealerorder = Dealerorder::findOrFail($id);
        $requestData["status"] = "drop";

        //บันทึกลงตาราง
        $dealerorder->update($requestData);

        return redirect()->back();
    }
    
    public function buy_all()
    {
        //มีการล็อคอินเข้าไอดี
        $user_id = Auth::user()->id;

        $cus_buyall = Dealerorder::where('user_id', '=', $user_id)
            ->where('status', '=', 'show')
            ->get();

        //เอาarrayมาวนลูบ
        foreach ($cus_buyall as $key1) {

            DB::table('dealerorder')
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
            Dealerorder::create($requestData);
        }



        return redirect('/dealerorder')->with('flash_message', 'Product drop!');
    }
}
