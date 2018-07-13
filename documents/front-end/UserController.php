<?php

namespace App\Http\Controllers\FrontEnd;

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
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = User::where('email', $request->users['email'])->first();

        //return $user;

        if(empty($user))
        {
            $user = new User;
            $user->name = $request->users['name'];
            $user->email = $request->users['email'];
            $user->password = Hash::make($request->users['password']);
            $user->remember_token = $request->_token;

            $user->save();

            $request->session()->put('user_id', $user->id);
            $request->session()->put('user_email', $user->email);

            return redirect($request['redirect_url']);
        } else {
            return redirect($request['redirect_url'])->with('alert_message', 'already exist!');
        }
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


    public function isEmailExist(Request $request)
    {
        
        $user = User::where('email', $request->email)->first();
        if(!empty($user)){
            return '1';
        } else {
            return '0';
        }
    }

    public function userLogin(Request $request)
    {
        
        $user = User::where('email', $request->users['email'])->first();
        
        $db_pass = $user['password'];
        $user_id = $user['id'];
        
        $check_pass = Hash::check($request->users['password'], $db_pass);

        return $user['password'];

        if($check_pass=='1')
        {
            $userDetail = UserDetail::where('user_id', $user_id)->first();

            $request->session()->put('role', $userDetail['role']);
            $request->session()->put('user_id', $user->id);
            $request->session()->put('user_email', $user->email);
            return redirect($request['redirect_url']);
        } else {

            return redirect(url()->previous())->with('alert_message', 'password not match');
        }
    }
}