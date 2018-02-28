<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\User; // need to remove
use App\Admin\UserDetail;
use App\Admin\VendorStoreDetail;
use App\Admin\VendorBankDetail;
use App\Admin\VendorBusinessDetail;

class vendorController extends Controller
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

        $vendors = UserDetail::with('users')->where('member_type', 'VENDOR')->get();

        //return $users;

        return view('admin/vendors/index', ['vendors'=>$vendors]);
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
        $userDetail->member_type = $request->user_details['member_type'];
        $userDetail->last_name = $request->user_details['last_name'];
        $userDetail->status = 1;

        $userDetail->save();

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
        $vendor = User::find($id);

        return view('admin/vendors/store-detail-edit', ['vendor'=>$vendor]);
    }

    public function businessDetailEdit($id)
    {
        $vendor = User::find($id)->vendor_business_details->first();

        //return $vendor;
        
        return view('admin/vendors/business-detail-edit', ['vendor'=>$vendor]);
    }

    public function bankDetailEdit($id)
    {
        $vendor = User::find($id)->vendor_bank_details->first();

        //return $vendor;
        
        return view('admin/vendors/bank-detail-edit', ['vendor'=>$vendor]);
    }

    public function storeDetailEdit($id)
    {

        $vendor = User::find($id)->vendor_store_details->first();

        //return $vendor;
        
        return view('admin/vendors/store-detail-edit', ['vendor'=>$vendor]);
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

    public function storeDetailUpdate(Request $request, $id)
    {

        //return $id;
        $vendorStoreDetail = VendorStoreDetail::find($id);

        $vendorStoreDetail->display_name = $request->vendor_store_details['display_name'];
        $vendorStoreDetail->description = $request->vendor_store_details['description'];

        $vendorStoreDetail->save();

        return redirect('admin/vendors');
    }

    public function bankDetailUpdate(Request $request, $id)
    {

        //return $id;
        $VendorBankDetail = VendorBankDetail::find($id);

        $VendorBankDetail->account_holder_name=$request->vendor_bank_details['account_holder_name'];
        $VendorBankDetail->account_number = $request->vendor_bank_details['account_number'];
        $VendorBankDetail->ifsc = $request->vendor_bank_details['ifsc'];
        $VendorBankDetail->branch_name = $request->vendor_bank_details['branch_name'];

        $VendorBankDetail->save();

        return redirect('admin/vendors');
    }

    public function businessDetailUpdate(Request $request, $id)
    {
        $fn = false;
        //return $id;
        $vendorBusinessDetail = VendorBusinessDetail::find($id);

        if($request->hasFile('signature')) {
            $fn = $product_image->store('public/users/'.$vendorBusinessDetail->user_id.'/signature');
            $fn = str_replace('public', '/storage', $fn);
        }

        $vendorBusinessDetail->name=$request->vendor_business_details['name'];
        $vendorBusinessDetail->tin = $request->vendor_business_details['tin'];
        $vendorBusinessDetail->tan = $request->vendor_business_details['tan'];
        $vendorBusinessDetail->cin = $request->vendor_business_details['cin'];
        $vendorBusinessDetail->signature = $fn;
        $vendorBusinessDetail->address_1 = $request->vendor_business_details['address_1'];
        $vendorBusinessDetail->address_2 = $request->vendor_business_details['address_2'];
        $vendorBusinessDetail->pin = $request->vendor_business_details['pin'];

        $vendorBusinessDetail->save();

        return redirect('admin/vendors');
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