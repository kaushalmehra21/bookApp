<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Admin\Slider;
use App\Admin\Category;
use App\Admin\Product;
use App\Admin\Cart;


class PageController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(Request $request)
    {

        $sliders = Slider::all()->toArray();
        
        $categories = Category::with('products')->get()->toArray();

        foreach ($categories as $key1=>$category) {
            foreach ($category['products'] as $key2=>$product) {
                $productImages = Product::find($product['id'])->images->where('is_default', 1)->first();
                //echo $productImages['file'];
                $categories[$key1]['products'][$key2]['image'] = $productImages['file'];
            }            
        }

        $param['sliders'] = $sliders;
        $param['categories'] = $categories;
        $param['login_detail'] = [];


        if ($request->session()->has('user_id')) {
            $login_detail['role'] = $request->session()->get('role');
            $login_detail['user_email'] = $request->session()->get('user_email');
            $login_detail['user_id'] = $request->session()->get('user_id');
            $param['login_detail'] = $login_detail;
        }

        //return $param['login_detail'];
        //return $categories;
        return view('frontend/pages/home', $param);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutUs()
    {

        $sliders = Slider::all()->toArray();
        //$categories = Category::all()->toArray();
        $categories = Category::with('products')->get()->toArray();

        foreach ($categories as $key1=>$category) {
            foreach ($category['products'] as $key2=>$product) {
                $productImages = Product::find($product['id'])->images->where('is_default', 1)->first();
                $categories[$key1]['products'][$key2]['image'] = $productImages['file'];
            }            
        }

        //return $categories;
        return view('frontend/pages/about-us', ['sliders'=>$sliders, 'categories'=>$categories]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shop()
    {
        $productsArr = [];
        
        $categories = Category::all()->toArray();
        $products = Product::with('categories')->get()->toArray();
        //$categories = Category::with('products')->get()->toArray();
        foreach ($products as $key1=>$product) {
            $productImages = Product::find($product['id'])->images->where('is_default', 1)->first();
            $products[$key1]['image'] = $productImages['file'];
        }  
        //return $products;
        return view('frontend/pages/shop', ['categories'=>$categories, 'products'=>$products]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function singleProduct()
    {
        $productsArr = [];
        
        $categories = Category::all()->toArray();
        $products = Product::with('categories')->get()->toArray();
        //$categories = Category::with('products')->get()->toArray();

        foreach ($products as $key1=>$product) {
            $productImages = Product::find($product['id'])->images->where('is_default', 1)->first();
            $products[$key1]['image'] = $productImages['file'];
        }  

        //return $products;
        return view('frontend/pages/single-page', ['categories'=>$categories, 'products'=>$products]);
    }


    public function cart()
    {
        $user_id = (!empty(session('user_id'))) ? session('user_id') : urlencode($_SERVER['REMOTE_ADDR']);

        $cart = DB::table('carts')->where([
                    ['user_id', '=', $user_id]
                ])->get()->toArray();

        $cart_arr = [];
        //echo '<pre>';
        foreach ($cart as $key => $value) {
            $value1 = json_decode(json_encode($value), True);
            //print_r($value);
            $product = Product::find($value1['product_id'])->toArray();
            //print_r($product);
            $cart_arr[$key] = $value1;
            $cart_arr[$key]['product'] = $product;
        }
        //print_r($cart_arr);
        //echo '</pre>';
        //$cart = Cart::all()->toArray();

        //return $cart;
        return view('frontend/pages/cart', ['carts'=>$cart_arr]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function categoryProducts()
    {
        $productsArr = [];
        
        $categories = Category::all()->toArray();
        $products = Product::with('categories')->get()->toArray();
        //$categories = Category::with('products')->get()->toArray();

        foreach ($products as $key1=>$product) {
            $productImages = Product::find($product['id'])->images->where('is_default', 1)->first();
            $products[$key1]['image'] = $productImages['file'];
        }  

        //return $products;
        return view('frontend/pages/single-page', ['categories'=>$categories, 'products'=>$products]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sellOnBooksStock()
    {

        $sliders = Slider::all()->toArray();
        //$categories = Category::all()->toArray();
        $categories = Category::with('products')->get()->toArray();

        foreach ($categories as $key1=>$category) {
            foreach ($category['products'] as $key2=>$product) {
                $productImages = Product::find($product['id'])->images->where('is_default', 1)->first();
                $categories[$key1]['products'][$key2]['image'] = $productImages['file'];
            }            
        }

        //return $categories;
        return view('frontend/pages/sell-on-booksstock', ['sliders'=>$sliders, 'categories'=>$categories]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function termsAndConditions()
    {
        $productsArr = [];
        
        $categories = Category::all()->toArray();
        $products = Product::with('categories')->get()->toArray();
        //$categories = Category::with('products')->get()->toArray();

        foreach ($products as $key1=>$product) {
            $productImages = Product::find($product['id'])->images->where('is_default', 1)->first();
            $products[$key1]['image'] = $productImages['file'];
        }  

        //return $products;
        return view('frontend/pages/terms-and-conditions', ['categories'=>$categories, 'products'=>$products]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacyAndPolicy()
    {

        $sliders = Slider::all()->toArray();
        //$categories = Category::all()->toArray();
        $categories = Category::with('products')->get()->toArray();

        foreach ($categories as $key1=>$category) {
            foreach ($category['products'] as $key2=>$product) {
                $productImages = Product::find($product['id'])->images->where('is_default', 1)->first();
                $categories[$key1]['products'][$key2]['image'] = $productImages['file'];
            }            
        }

        //return $categories;
        return view('frontend/pages/privacy-and-policy', ['sliders'=>$sliders, 'categories'=>$categories]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function faq()
    {

        $sliders = Slider::all()->toArray();
        //$categories = Category::all()->toArray();
        $categories = Category::with('products')->get()->toArray();

        foreach ($categories as $key1=>$category) {
            foreach ($category['products'] as $key2=>$product) {
                $productImages = Product::find($product['id'])->images->where('is_default', 1)->first();
                $categories[$key1]['products'][$key2]['image'] = $productImages['file'];
            }            
        }

        //return $categories;
        return view('frontend/pages/faq', ['sliders'=>$sliders, 'categories'=>$categories]);
    }   


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUs()
    {

        $sliders = Slider::all()->toArray();
        //$categories = Category::all()->toArray();
        $categories = Category::with('products')->get()->toArray();

        foreach ($categories as $key1=>$category) {
            foreach ($category['products'] as $key2=>$product) {
                $productImages = Product::find($product['id'])->images->where('is_default', 1)->first();
                $categories[$key1]['products'][$key2]['image'] = $productImages['file'];
            }            
        }

        //return $categories;
        return view('frontend/pages/contact-us', ['sliders'=>$sliders, 'categories'=>$categories]);
    }
   
}