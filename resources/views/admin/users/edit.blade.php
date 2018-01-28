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
                        
                        <form method="post" action="/admin/users/{{ $user->id }}" class="form-horizontal">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <fieldset>
                                <legend>Add New User</legend>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">Name</label>
                                    <div class="col-lg-10">
                                        <input name="user[name]" class="form-control" id="inputEmail" type="text" placeholder="Name" value="{{ $user->name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">Email</label>
                                    <div class="col-lg-10">
                                        <input name="user[email]" class="form-control" id="inputEmail" type="email" placeholder="Email" value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputPassword">Password</label>
                                    <div class="col-lg-10">
                                        <input name="user[password]" class="form-control" id="inputPassword" type="password" placeholder="Password" value="{{ $user->password }}">
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