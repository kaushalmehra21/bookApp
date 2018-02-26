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
                        <form method="post" action="/admin/vendors/{{ $vendor->id }}/store-detail/update" class="form-horizontal">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <input type="hidden" name="vendor_store_details[user_id]" value="{{ $vendor->user_id }}">
                            <fieldset>
                                <legend>Add New User</legend>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">Display Name</label>
                                    <div class="col-lg-10">
                                        <input name="vendor_store_details[display_name]" class="form-control" id="inputEmail" type="text" placeholder="Name" value="{{ $vendor->display_name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">Description</label>
                                    <div class="col-lg-10">
                                        <textarea name="vendor_store_details[description]" class="form-control" id="inputEmail" >{{ $vendor->email }}</textarea>
                                    </div>
                                </div>
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