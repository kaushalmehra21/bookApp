<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Admin\Language;


class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Language::all()->toArray();

        return view('admin/languages/index', ['languages'=>$languages]);
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/languages/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $language = new Language;

        $language->title = $request->languages['title'];

        //$tag->timestamps = false;
        
        $language->save();

        return redirect('admin/languages');
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
        $language = Language::find($id);
        $language->delete();

        return redirect('admin/languages');
    }


    public function ajaxListJson(Request $request)
    {
        $languages = DB::table('languages')->select('title', 'id')->where('title', 'like', '%'.$request->search.'%')->get()->toArray();

        $output = [];
        $ginti = 0;
        foreach ($languages as $key => $value) {
            $output[$ginti]['text'] = $value->title;
            $output[$ginti]['value'] = $value->id;
            $ginti++;
        }


        $json_languages = json_encode($output);

        return $json_languages;
    }
}
