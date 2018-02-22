<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Input;
//use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use App\Admin\Product;
use App\Admin\ProductImage;
use App\Admin\ProductCategory;
use App\Admin\ProductTag;
use App\Admin\Language;
use App\Admin\user;

class ProductController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all()->toArray();

        $productArr = array();
        foreach ($products as $key => $value) {
            $productArr[$key] = $value;
            
            $language = language::find($value['language_id'])->toArray();
            $productArr[$key]['language'] = $language;

            $user = User::find($value['user_id'])->toArray();
            $productArr[$key]['user'] = $user;

        }

        return view('admin/products/index', ['products'=>$productArr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/products/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*print_r($request->product_categories);
        die;*/

        $product = new Product;

        if ($request->hasFile('product_images')) {
            $fileNameArr = [];
            foreach ($request->product_images as $product_image) {
                $file_name = $product_image->store('public/product_images');
                $file_name = str_replace('public', '/storage', $file_name);
                $fileNameArr[] = $file_name;
            }
        }
        
        $product->title         = $request->products['title'];
        $product->slug          = $request->products['slug'];
        $product->sub_title     = $request->products['sub_title'];
        $product->description   = $request->products['description'];
        $product->regular_price = $request->products['regular_price'];
        $product->sale_price    = $request->products['sale_price'];
        $product->user_id       = $request->products['user_id'];
        $product->language_id   = $request->product_language['id'];
        
        $product->save();

        foreach ($fileNameArr as $filename) {
            $productImage = new ProductImage;
            $productImage->product_id = $product->id;
            $productImage->file = $filename;
            $productImage->save();
        }

        foreach ($request->product_categories['id'] as $category_id) {
            $productCategory = new ProductCategory;
            $productCategory->product_id = $product->id;
            $productCategory->category_id = $category_id;
            $productCategory->save();
        }

        foreach ($request->product_tags['id'] as $tag_id) {
            $productTag = new ProductTag;
            $productCategory->product_id = $product->id;
            $productCategory->tag_id = $tag_id;
            $productCategory->save();
        }

        return redirect('admin/products');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('admin/products');
    }


    public function images($product_id)
    {

        $productImages = Product::find($product_id)->images->toArray();

        /*echo '<pre>';
        return print_r($productImages);
        die;*/

        return view('admin/products/images', ['productImages'=>$productImages]);
    }
}