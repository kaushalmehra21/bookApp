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
                        <form method="post" action="/admin/site-option/{{ $siteOption->id }}/update" class="form-horizontal">
                            {{ csrf_field() }}
                            <fieldset>
                                <legend>Add New Category</legend>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">Key</label>
                                    <div class="col-lg-10">
                                        {{ $siteOption->option_key }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputEmail">Value</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="site_options[option_value]" class="form-control"  value="{{ $siteOption->option_value }}" placeholder="Description">
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