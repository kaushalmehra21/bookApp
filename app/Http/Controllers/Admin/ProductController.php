<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use App\Admin\Product;
use App\Admin\ProductImage;
use App\Admin\ProductCategory;
use App\Admin\ProductTag;

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
        $products = Product::with(['users', 'languages'])->get();

        //return $products;

        return view('admin/products/index', ['products'=>$products]);
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
        $product->description   = htmlspecialchars($request->products['description']);
        $product->regular_price = $request->products['regular_price'];
        $product->sale_price    = $request->products['sale_price'];
        $product->user_id       = $request->products['user_id'];
        $product->language_id   = $request->product_language['id'];
        
        $product->save();

        if(isset($fileNameArr) && !empty($fileNameArr)) 
        {
            foreach ($fileNameArr as $filename) 
            {
                $productImage = new ProductImage;
                $productImage->product_id = $product->id;
                $productImage->file = $filename;
                $productImage->save();
            }    
        }
        

        if(isset($request->product_categories['id']) && !empty($request->product_categories['id'])) 
        {
            foreach ($request->product_categories['id'] as $category_id) 
            {
                $productCategory = new ProductCategory;
                $productCategory->product_id = $product->id;
                $productCategory->category_id = $category_id;
                $productCategory->save();
            }
        }
        
        if(isset($request->product_tags['id']) && !empty($request->product_tags['id'])) 
        {
            foreach ($request->product_tags['id'] as $tag_id) {
                $productTag = new ProductTag;
                $productTag->product_id = $product->id;
                $productTag->tag_id = $tag_id;
                $productTag->save();
            }
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
        $product = Product::find($id);

        $product_categories = $product->categories()->get();
        $product_tags = $product->tags()->get();
        $product_language = $product->languages()->get();

        //return $product_tags;

        return view('admin/products/edit', ['product'=>$product, 'product_categories'=>$product_categories, 'product_tags'=>$product_tags, 'product_language'=>$product_language]);

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
        $product = Product::find($id);

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
        $product->description   = htmlspecialchars($request->products['description']);
        $product->regular_price = $request->products['regular_price'];
        $product->sale_price    = $request->products['sale_price'];
        $product->user_id       = $request->products['user_id'];
        $product->language_id   = $request->product_language['id'];
        
        $product->save();

        if(isset($fileNameArr) && !empty($fileNameArr)) 
        {
            foreach ($fileNameArr as $filename) 
            {
                $productImage = new ProductImage;
                $productImage->product_id = $product->id;
                $productImage->file = $filename;
                $productImage->save();
            }    
        }
        

        if(isset($request->product_categories['id']) && !empty($request->product_categories['id'])) 
        {
            foreach ($request->product_categories['id'] as $category_id) 
            {
                $productCategory = new ProductCategory;
                $productCategory->product_id = $product->id;
                $productCategory->category_id = $category_id;
                $productCategory->save();
            }
        }
        
        if(isset($request->product_tags['id']) && !empty($request->product_tags['id'])) 
        {
            foreach ($request->product_tags['id'] as $tag_id) {
                $productTag = new ProductTag;
                $productTag->product_id = $product->id;
                $productTag->tag_id = $tag_id;
                $productTag->save();
            }
        }

        return redirect('admin/products');
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
        $product = Product::find($product_id);
        $productImages = Product::find($product_id)->images->toArray();

        /*echo '<pre>';
        return print_r($productImages);
        die;*/

        return view('admin/products/images', ['products'=>$product, 'productImages'=>$productImages]);
    }
}