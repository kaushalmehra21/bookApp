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
            <form method="post" action="/admin/products" enctype="multipart/form-data" >
                
                <div class="card-body">
                    <h4 class="card-title">Basic Detail</h4>
                    <input type="hidden" name="_token" id="token_" value="{{ csrf_token() }}">
                    <input type="hidden" name="products[user_id]" id="token_" value="{{ Auth::user()->id }}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label" for="inputEmail">Title</label>
                                <input name="products[title]" class="form-control" id="productsTitle" type="text" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="inputEmail">Slug</label>
                                <input name="products[slug]" class="form-control" id="productsSlug" type="text" placeholder="Title">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="control-label" for="inputEmail">Sub Title</label>
                            <textarea class="form-control" name="products[sub_title]" id="ProductsSubTitle" rows="4" ></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputEmail">Description</label>
                        <textarea class="form-control" name="products[description]" id="ProductsDescription"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputEmail">Choose Images</label>
                        <input type="file" name="product_images[]" multiple>
                    </div>
                    <hr>
                    <h4 class="card-title">Pricing Detail</h4>
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label class="control-label" for="inputEmail">Regular Price</label>
                            <input name="products[regular_price]" class="form-control" id="ProductsRegularPrice" type="text" placeholder="Title">
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="control-label" for="inputEmail">Sale Price</label>
                            <input name="products[sale_price]" class="form-control" id="ProductsSalePrice" type="text" placeholder="Title">
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="control-label" for="inputEmail">Discount Price</label>
                            <input name="discount" class="form-control" id="discount" type="text" placeholder="400">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label class="control-label" for="inputEmail">Add Categories</label>
                            <select class="form-control" name="categories[id]" id="addCategoryTrgr" multiple>
                                
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="control-label" for="inputEmail">Add Tags</label>
                            <select class="form-control" name="tags[id]" id="addTagTrgr" multiple>
                                
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="control-label" for="inputEmail">Select Language</label>
                            <select class="form-control" name="languages[id]" id="addLanguageTrgr" multiple>
                                
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
                var token_ = $('#token_').val();

                $.ajax({
                    url     : '/admin/categories/ajax_list_json',
                    data: { 
                        'search'    : term, 
                        'start'     : 0,
                        'token'     : token_
                    },
                    dataType: 'json',
                    success: function(data){
                        var $items = [];
                        $.each(data, function(k, v){
                            $items.push(v);
                        });
                        object.trigger('tokenize:dropdown:fill', [$items]);
                    }
                });
            }
        });
    });
    $(document).ready(function(){
        $('#addTagTrgr').tokenize2({
            searchFromStart: false,
            tokensAllowCustom: true,
            dataSource: function(term, object){
                var token_ = $('#token_').val();

                $.ajax({
                    url     : '/admin/tags/ajax_list_json',
                    data: { 
                        'search'    : term, 
                        'start'     : 0,
                        'token'     : token_
                    },
                    dataType: 'json',
                    success: function(data){
                        var $items = [];
                        $.each(data, function(k, v){
                            $items.push(v);
                        });
                        object.trigger('tokenize:dropdown:fill', [$items]);
                    }
                });
            }
        });
    });
    $(document).ready(function(){
        $('#addLanguageTrgr').tokenize2({
            searchFromStart: false,
            tokensAllowCustom: true,
            dataSource: function(term, object){
                var token_ = $('#token_').val();

                $.ajax({
                    url     : '/admin/languages/ajax_list_json',
                    data: { 
                        'search'    : term, 
                        'start'     : 0,
                        'token'     : token_
                    },
                    dataType: 'json',
                    success: function(data){
                        var $items = [];
                        $.each(data, function(k, v){
                            $items.push(v);
                        });
                        console.log($items);
                        object.trigger('tokenize:dropdown:fill', [$items]);
                    }
                });
            }
        });
    });

</script>
@endsection