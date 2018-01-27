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
                        <form method="post" action="/admin/categories" class="form-horizontal">
                            {{ csrf_field() }}
                            <fieldset>
                                <legend>Add New Category</legend>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">Title</label>
                                    <div class="col-lg-10">
                                        <input name="category[title]" class="form-control" id="inputEmail" type="text" placeholder="Title">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">Description</label>
                                    <div class="col-lg-10">
                                        <input name="category[description]" class="form-control" id="inputEmail" type="text" placeholder="Description">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputPassword">Parent</label>
                                    <div class="col-lg-10">
                                        <input name="category[parent_id]" class="form-control" id="inputPassword" type="text" placeholder="Parent">
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