<?php
//app/Helpers/Envato/User.php
namespace App\Helpers\Store;
 
//use Illuminate\Support\Facades\DB;
use App\Admin\Product;

class ProductHelper {
    /**
     * @param int $user_id User-id	
     * 
     * @return string
     */
    public static function getNewArrivals() {


    	$NewArrivals = Product::select('id','title','sub_title', 'regular_price')->where('status', 1)->orderBy('id', 'desc')->take(10)->get();

    	$test = 'test';
        return $NewArrivals;
    }
}