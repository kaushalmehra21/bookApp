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
            <form method="post" action="/admin/categories" >
                
                <div class="card-body">
                    <h4 class="card-title">Basic Detail</h4>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label" for="inputEmail">Title</label>
                        <input name="product[title]" class="form-control" id="inputEmail" type="text" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputEmail">Sub Title</label>
                        <input name="product[title]" class="form-control" id="inputEmail" type="text" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputEmail">Description</label>
                        <textarea class="form-control" id="inputEmail"></textarea>
                    </div>
                    <hr>
                    <h4 class="card-title">Pricing Detail</h4>
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label class="control-label" for="inputEmail">Regular Price</label>
                            <input name="product[sub_title]" class="form-control" id="inputEmail" type="text" placeholder="Title">
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="control-label" for="inputEmail">Sale Price</label>
                            <input name="product[sub_title]" class="form-control" id="inputEmail" type="text" placeholder="Title">
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="control-label" for="inputEmail">Discount Price</label>
                            <input name="product[sub_title]" class="form-control" id="inputEmail" type="text" placeholder="Title">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary icon-btn" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>
                    &nbsp;&nbsp;&nbsp;
                    <button class="btn btn-default icon-btn" type="reset"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection