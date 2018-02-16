<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Product;

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


        $product = new Product;

        $product->title = $request->products['title'];
        $product->slug = $request->products['slug'];
        $product->sub_title = $request->products['sub_title'];
        $product->description = $request->products['description'];
        $product->regular_price = $request->products['regular_price'];
        $product->sale_price = $request->products['sale_price'];
        $product->user_id = $request->products['user_id'];

        //$product->category_id = $request->categories['id'];
        //$product->tag_id = $request->tags['id'];
        $product->language_id = $request->languages['id'];
        
        $product->save();

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
        //
    }


    public function ajaxListJson(Request $request)
    {
        return $request->token;
        //return print_r($category->_token);

        //$categories = Category::all()->toArray();

        //->where('name', 'like', 'T%')
        //return json_encode($categories);
    }
}
