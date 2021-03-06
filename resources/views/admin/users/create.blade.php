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
                        <form method="post" action="/admin/users" class="form-horizontal">
                            {{ csrf_field() }}
                            <fieldset>
                                <legend>Add New User/Vendor</legend>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">First Name</label>
                                    <div class="col-lg-10">
                                        <input name="users[name]" class="form-control" id="inputEmail" type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">Last Name</label>
                                    <div class="col-lg-10">
                                        <input name="user_details[last_name]" class="form-control" id="inputEmail" type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">Email</label>
                                    <div class="col-lg-10">
                                        <input name="users[email]" class="form-control" id="inputEmail" type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputPassword">Password</label>
                                    <div class="col-lg-10">
                                        <input name="users[password]" class="form-control" id="inputPassword" type="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputPassword">Role</label>
                                    <div class="col-lg-10">
                                        <select name="user_details[role]" class="form-control">
                                            <option value="SUBSCRIBER">Subscriber</option>
                                            <option value="VENDOR">Vendor</option>
                                            <option value="ADMIN">Admin</option>
                                            <option value="SUPERADMIN">Super Admin</option>
                                        </select>
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