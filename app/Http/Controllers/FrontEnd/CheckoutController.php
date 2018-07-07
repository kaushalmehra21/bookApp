<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use App\Admin\Cart;
use App\Admin\Product;
use App\Admin\Country;
use App\Admin\UserAddress;
//use App\Admin\Product;

class CheckoutController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reviewCart()
    {

        return $cartsess = session('order');

        $user_id = (!empty(session('user_id'))) ? session('user_id') : urlencode($_SERVER['REMOTE_ADDR']);

        $cart = DB::table('carts')->where([
                    ['user_id', '=', $user_id]
                ])->get()->toArray();

        $cart_arr = [];
        //echo '<pre>';
        foreach ($cart as $key => $value) {
            $value1 = json_decode(json_encode($value), TRUE);
            $product = Product::find($value1['product_id'])->toArray();
            $cart_arr[$key] = $value1;
            $cart_arr[$key]['product'] = $product;
        }
        
        return view('frontend/pages/checkout', ['carts'=>$cart_arr]);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function checkout(Request $request)
    {
        //return $request;
        return view('frontend/pages/checkout');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function address(Request $request)
    {
        //return $request;

        $countries = Country::all()->toArray();

        return view('frontend/pages/checkout', ['countries'=>$countries]);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addressSave(Request $request)
    {
        $countries = Country::all()->toArray();
        $UserAddress = new UserAddress;

        //return $value = $request->session()->get('user_id');

        $UserAddress->user_id = $request->session()->get('user_id');
        $UserAddress->full_name = $request->userAddress['full_name'];
        $UserAddress->mobile = $request->userAddress['mobile'];
        $UserAddress->pin_code = $request->userAddress['pincode'];
        $UserAddress->address_1 = $request->userAddress['address_1'];
        $UserAddress->address_2 = $request->userAddress['address_2'];
        $UserAddress->country = $request->userAddress['country'];
        $UserAddress->state = $request->userAddress['state'];
        $UserAddress->city = $request->userAddress['city'];
        $UserAddress->address_type = $request->userAddress['address_type'];

        $address_id = $UserAddress->save(); 

        $request->session()->put('address_id', $UserAddress->id);

        return redirect('checkout/review-cart');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        //return $request;

        return view('frontend/pages/checkout-login');

    }

}
