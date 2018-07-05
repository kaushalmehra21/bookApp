<?php
//app/Helpers/Envato/User.php
namespace App\Helpers\Store;
 
use Illuminate\Support\Facades\DB;
use App\Admin\Product;
use App\Admin\Cart;

class OrderSessionHelper {

    /**
     * @param int $user_id User-id	
     * 
     * @return string
     */
    public static function SetOrderSession() 
    {

    	$_SESSION['order'] = [];
        /*$user_id = (!empty(session('user_id'))) ? session('user_id') : urlencode($_SERVER['REMOTE_ADDR']);

        $cart = DB::table('carts')->where([
                    ['user_id', '=', $user_id]
                ])->get()->toArray();

        $cart_arr = [];
        
        foreach ($cart as $key => $value) 
        {
            $value1 = json_decode(json_encode($value), True);
            //print_r($value);
            $product = Product::find($value1['product_id'])->toArray();
            //print_r($product);
            $cart_arr[$key] = $value1;
            $cart_arr[$key]['product'] = $product;

            $_SESSION['order']['product_ids'][] = $product['id'];
            $_SESSION['order']['prices'][$product['id']] = $product['sale_price'];
            $_SESSION['order']['quantities'][$product['id']] = $value->quantity;
            $_SESSION['order']['total_prices'][$product['id']] = $product['sale_price']*$value->quantity;
        }
        //print_r($cart_arr);
        //echo '</pre>';
        //$cart = Cart::all()->toArray();

        $_SESSION['order']['total_amount'] = array_sum($_SESSION['order']['total_prices']);*/


        return $_SESSION['order'];
    }
}