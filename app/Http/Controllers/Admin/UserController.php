<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Admin\User;
use App\Admin\UserDetail;
use App\Admin\VendorBusinessDetail;
use App\Admin\VendorBankDetail;
use App\Admin\VendorStoreDetail;


class UserController extends Controller
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

        $users = User::with('user_details')->get();

        return view('admin/users/index', ['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/users/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = new User;

        $user->name = $request->users['name'];
        $user->email = $request->users['email'];
        $user->password = Hash::make($request->users['password']);
        $user->remember_token = $request->_token;

        $user->save();

        $userDetail = new UserDetail;
        $userDetail->user_id = $user->id;
        $userDetail->role = $request->user_details['role'];
        $userDetail->last_name = $request->user_details['last_name'];
        $userDetail->user_status = 1;
        if($request->user_details['role']=='VENDOR'){
            $userDetail->vendor_status = 1;
        } else if ($request->user_details['role']=='ADMIN') {
            $userDetail->vendor_status = 1;
            $userDetail->admin_status = 1;
        } else if ($request->user_details['role']=='SUPERADMIN') {
            $userDetail->vendor_status = 1;
            $userDetail->admin_status = 1;
            $userDetail->superadmin_status = 1;
        }

        $userDetail->save();


        if($request->user_details['role']!='SUBSCRIBER') {
            $vendorBankDetail = new VendorBankDetail;
            $vendorBankDetail->user_id = $user->id;
            $vendorBankDetail->save();

            $vendorBusinessDetail = new VendorBusinessDetail;
            $vendorBusinessDetail->user_id = $user->id;
            $vendorBusinessDetail->save();

            $vendorStoreDetail = new VendorStoreDetail;
            $vendorStoreDetail->user_id = $user->id;
            $vendorStoreDetail->save();
        }

        

        return redirect('admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin/users/show', ['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        
        return view('admin/users/edit', ['user'=>$user]);
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
        $user = User::find($id);

        $user->name = $request->user['name'];
        $user->email = $request->user['email'];
        $user->password = $request->user['password'];
        $user->remember_token = $request->_token;

        $user->save();

        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('admin/users');
    }
}
