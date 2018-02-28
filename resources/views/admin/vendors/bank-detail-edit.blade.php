@extends('layouts.admin.main')

@section('content')
    @component('admin.components.breadcum')
        @slot('title')
            Dashboard
        @endslot
        @slot('description')
            A free and modular admin template
        @endslot
        @slot('icon')
            dashboard
        @endslot
    @endcomponent
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="row">
                <div class="col-md-12">
                    <div class="well bs-component">
                        <form method="post" action="/admin/vendors/{{ $vendor->id }}/bank-detail/update" class="form-horizontal">
                            {{ csrf_field() }}
                            <input type="hidden" name="vendor_bank_details[user_id]" value="{{ $vendor->user_id }}">
                            <fieldset>
                                <legend>Add New User</legend>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">Account Holder Name</label>
                                    <div class="col-lg-10">
                                        <input name="vendor_bank_details[account_holder_name]" class="form-control" id="inputEmail" type="text" placeholder="Name" value="{{ $vendor->account_holder_name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">Account Number</label>
                                    <div class="col-lg-10">
                                        <input name="vendor_bank_details[account_number]" class="form-control" id="inputEmail" type="text" placeholder="Name" value="{{ $vendor->account_number }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">IFSC</label>
                                    <div class="col-lg-10">
                                        <input name="vendor_bank_details[ifsc]" class="form-control" id="inputEmail" type="text" placeholder="Name" value="{{ $vendor->ifsc }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">Branch Name</label>
                                    <div class="col-lg-10">
                                        <input name="vendor_bank_details[branch_name]" class="form-control" id="inputEmail" type="text" placeholder="Name" value="{{ $vendor->branch_name }}">
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">Select Country</label>
                                    <div class="col-lg-10">
                                        <select name="vendor_bank_details[country_id]"  class="form-control" >
                                            
                                        </select>
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button class="btn btn-default" type="reset">Cancel</button>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection