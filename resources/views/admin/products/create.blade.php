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
                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label" for="inputEmail">Title</label>
                                <input name="product[title]" class="form-control" id="inputEmail" type="text" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="inputEmail">Slug</label>
                                <input name="product[title]" class="form-control" id="inputEmail" type="text" placeholder="Title">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="control-label" for="inputEmail">Sub Title</label>
                            <textarea class="form-control" id="inputEmail" rows="4" ></textarea>
                        </div>
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
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label class="control-label" for="inputEmail">Add Categories</label>
                            <select class="" id="addCategoryTrgr" multiple>
                                
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="control-label" for="inputEmail">Add Tags</label>
                            <select class="form-control" id="addTagTrgr" multiple>
                                
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="control-label" for="inputEmail">Select Language</label>
                            <select class="form-control" id="addLanguageTrgr">
                                
                            </select>
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
<script type="text/javascript">
    $(document).ready(function(){
        $('#addCategoryTrgr').tokenize2({
            searchFromStart: false,
            dataSource: function(term, object){
                $.ajax({
                    url : "../categories/ajax_list_json",
                    data: { 
                        search: term, 
                        start: 0,
                        _token : $('#_token').val()
                    },
                    type : 'POST',
                    //dataType: 'json',
                    success: function(data){
                        console.log(data);
                        /*var $items = [];
                        $.each(data, function(k, v){
                            $items.push(v);
                        });
                        object.trigger('tokenize:dropdown:fill', [$items]);*/
                    }
                });
            }
        });
    });
    $(document).ready(function(){
        $('#addTagTrgr').tokenize2({
            searchFromStart: false,
            tokensAllowCustom: true
        });
    });
    $(document).ready(function(){
        $('#addLanguageTrgr').tokenize2({
            searchFromStart: false,
            tokensAllowCustom: true
        });
    });

</script>
@endsection