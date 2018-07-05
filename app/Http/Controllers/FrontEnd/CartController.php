<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use App\Admin\Cart;
use App\Admin\Product;

class CartController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = (!empty(session('user_id'))) ? session('user_id') : urlencode($_SERVER['REMOTE_ADDR']);

        $cart = DB::table('carts')->where([
                    ['user_id', '=', $user_id]
                ])->get()->toArray();

        $cart_arr = [];
        
        foreach ($cart as $key => $value) {
            $value1 = json_decode(json_encode($value), True);
            $product = Product::find($value1['product_id'])->toArray();
            $cart_arr[$key] = $value1;
            $cart_arr[$key]['product'] = $product;
        }

        return view('frontend/pages/cart', ['carts'=>$cart_arr]);
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::find($id);
        $cart->delete();

    }


    public function ajaxAdd(Request $request)
    {
        
    	//return 'dfsdfsdf';
        $cart = DB::table('carts')->select('id')->where([
                    ['product_id', '=', $request->product_id],
                    ['user_id', '=', $request->user_id]
                ])->get()->toArray();

        //return $cart;

        if(!$cart) {
        	$cart = new Cart;
        	$cart->user_id = $request->user_id;
	        $cart->user_ip = $request->user_ip;
	        $cart->product_id = $request->product_id;
	        $cart->quantity = $request->quantity;

	        $cart->save();

	        return '1';
        } else {
        	return '0';
        }
    }

    public function ajaxUpdate(Request $request)
    {
        
        $cart = Cart::find($request->cart_id);

        //return $cart;

        $cart->quantity = $request->quantity;
        $aa = $cart->save();

        if($aa) {
            return '1';
        } else {
            return '0';
        }

    }


    public function ajaxDelete(Request $request)
    {

        //return $request->cart_id;

        $cart = Cart::find($request->cart_id);
        //return $cart;

        $cart->delete();
    }
}
