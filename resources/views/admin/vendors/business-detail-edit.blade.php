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
                        <form method="post" action="/admin/vendors/{{ $vendor->id }}/business-detail/update" class="form-horizontal">
                            {{ csrf_field() }}
                            <input type="hidden" name="vendor_business_details[user_id]" value="{{ $vendor->user_id }}">
                            <fieldset>
                                <legend>Add New User</legend>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">Name</label>
                                    <div class="col-lg-10">
                                        <input name="vendor_business_details[name]" class="form-control" id="inputEmail" type="text" placeholder="Name" value="{{ $vendor->name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">TIN</label>
                                    <div class="col-lg-10">
                                        <input name="vendor_business_details[tin]" class="form-control" id="inputEmail" type="text" placeholder="Name" value="{{ $vendor->tin }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">TAN</label>
                                    <div class="col-lg-10">
                                        <input name="vendor_business_details[tan]" class="form-control" id="inputEmail" type="text" placeholder="Name" value="{{ $vendor->tan }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">CIN</label>
                                    <div class="col-lg-10">
                                        <input name="vendor_business_details[cin]" class="form-control" id="inputEmail" type="text" placeholder="Name" value="{{ $vendor->cin }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">Signature</label>
                                    <div class="col-lg-10">
                                        <input name="vendor_business_details[signature]" class="form-control" id="inputEmail" type="file" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">House Number</label>
                                    <div class="col-lg-10">
                                        <input name="vendor_business_details[address_1]" class="form-control" id="inputEmail" type="text" placeholder="Name" value="{{ $vendor->address_1 }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">Street/Area</label>
                                    <div class="col-lg-10">
                                        <input name="vendor_business_details[address_2]" class="form-control" id="inputEmail" type="text" placeholder="Name" value="{{ $vendor->address_2 }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">PIN Code</label>
                                    <div class="col-lg-10">
                                        <input name="vendor_business_details[pin]" class="form-control" id="inputEmail" type="text" placeholder="Name" value="{{ $vendor->pin }}">
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">Select Country</label>
                                    <div class="col-lg-10">
                                        <select name="vendor_business_details[country_id]"  class="form-control" >
                                            
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