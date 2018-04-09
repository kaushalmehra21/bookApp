<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
//use App\Admin\Category;


class HomeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$categories = Category::all()->toArray();

        return view('frontend/home/index');
    }

   
}
