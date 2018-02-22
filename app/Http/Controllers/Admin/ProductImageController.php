<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

use App\Admin\Product;
use App\Admin\ProductImage;

class ProductImageController extends Controller
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
        $productImages = ProductImage::all()->toArray();

        return view('admin/product-images/index', ['productImages'=>$productImages]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productImage = ProductImage::find($id);
        $productImage->delete();

        return redirect('admin/products');
    }


    public function makeDefault($image_id, $product_id)
    {

        $productImages = Product::find($product_id)->images;
    
        foreach ($productImages as $productImage) {
            $productImage = ProductImage::find($productImage->id);
            $productImage->is_default = '0';
            $productImage->save();
        }

        $productImage = ProductImage::find($image_id);
        $productImage->is_default = '1';
        $productImage->save();

        return redirect('admin/products/'.$product_id.'/images');
        
    }
}
