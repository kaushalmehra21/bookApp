<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\SiteOption;

class SiteOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siteOptions = SiteOption::all()->toArray();

        return view('admin/site-options/index', ['siteOptions'=>$siteOptions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/site-option/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siteOption = new SiteOption;

        $siteOption->option_key = $request->site_options['option_key'];
        $siteOption->option_value = htmlspecialchars($request->site_options['option_value']);
        
        $siteOption->save();

        return redirect('admin/site-options');
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
        $siteOption = SiteOption::find($id);

        return view('admin/site-options/edit', ['siteOption'=>$siteOption]);
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
        $siteOption = SiteOption::find($id);

        //$siteOption->option_key = $request->site_options['option_key'];
        $siteOption->option_value = $request->site_options['option_value'];
        
        $siteOption->save();

        return redirect('admin/site-options');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siteOption = SiteOption::find($id);
        $siteOption->delete();

        return redirect('admin/site-options');
    }


    public function getOption($key)
    {
        $siteOption_value = SiteOption::where('option_key', $key);

        return $siteOption_value;
    }
}
