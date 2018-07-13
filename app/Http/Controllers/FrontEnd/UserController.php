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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index()
    {

        $users = User::with('user_details')->get();

        return view('admin/users/index', ['users'=>$users]);
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
    {
        return view('admin/users/create');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function edit($id)
    {
        $user = User::find($id);
        
        return view('admin/users/edit', ['user'=>$user]);
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->user['name'];
        $user->email = $request->user['email'];
        $user->password = $request->user['password'];
        $user->remember_token = $request->_token;

        $user->save();

        return redirect('admin/users');
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('admin/users');
    }*/


    public function isEmailExist(Request $request)
    {
        
        $user = User::where('email', $request->email)->first();
        //return $user;
        if(!empty($user)){
            return '1';
        } else {
            return '0';
        }
    }

    public function userLogin(Request $request)
    {
        $user = User::where('email', $request->users['email'])->first();
        $pass = $user['password'];
        $user_id = $user['id'];
        $userDetail = UserDetail::where('user_id', $user_id)->first();
        $password_s = Hash::check($request->users['password'], $pass);

       // return $role;
       // var_dump($password_s) ;
        
        //$request->session()->put('user_id', $user->id);
        //$request->session()->put('user_email', $user->email);
       
                /*return $password_s;
*/        if( $password_s == '1')
        {
            $request->session()->put('role', $userDetail['role']);
            $request->session()->put('user_id', $user->id);
            $request->session()->put('user_email', $user->email);
           // echo "hi";
            return redirect($request['redirect_url']);
        } else {
            return redirect(url()->previous())->with('alert_message', 'password not match');
        }
    }
}




