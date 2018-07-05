@extends('layouts.frontend.checkout-login')


@section('content')
	<div class="col-md-12 col-lg-12 col-sm-12 marginTop80 ">
		<div class="col-md-4 col-lg-4 col-sm-12">&nbsp;</div>
		<div class="col-md-4 col-lg-4 col-sm-12">
			<div class="col-md-12 col-lg-12 col-sm-12 ">
				<form name="checkout-login" id="checkout-login" action="<?php echo url('/users/login') ?>" method="post" >

					<input type="hidden" name="total_amount" value="{{ $_POST['total_amount'] }}">
					<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="redirect_url" value="<?php echo url('/checkout/address') ?>">

					<div class="form-group">
					  	<label style="font-size:20px">Login</label>
					</div>
					<div class="form-group">
					  	<label >Email:</label>
					  	<input type="email" name="users[email]" id="cl_page_isEmailExistTrgr" class="form-control">
					  	<span id="emailExistMsgSpan" style="color: red"></span>
					</div>
					<div class="form-group">
					  	<label >Password:</label>
					  	<input type="password" name="users[password]" class="form-control">
					</div>
					<div class="form-group">
					  	<input type="submit" id="cl_RegisterBtn" value="continue" class="btn-1 shadow-0" disabled >
					</div>
					<div class="form-group">
					  	<label style="color:lightblue" id="user_forgot" >Need Help</label>
					</div>
					<div class="form-group" id="password_forgot">
					  	<label style="color:lightblue" >Forgot Password</label>
					</div>
				</form>
				<hr>
				<a>Don't have a account register here</a>
			</div>
		</div>
		<div class="col-md-4 col-lg-4 col-sm-12">&nbsp;</div>
	</div>
@endsection