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
                    <h4 class="card-title">Product Basic Details</h4>
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
                                <input name="products[slug]" class="form-control" id="productsSlug" type="text" placeholder="Slug">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="control-label" for="inputEmail">Sub Title</label>
                            <textarea class="form-control" name="products[sub_title]" id="ProductsSubTitle" rows="4" ></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputEmail">Description</label>
                        
                        <textarea class="form-control" name="products[description]" id="ProductsDescription" rows="10" cols="80">
                        </textarea>
                        
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
                            <input name="products[regular_price]" class="form-control ProductsRegularPrice" id="ProductsRegularPrice" type="number" placeholder="e.g. 500">
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="control-label" for="inputEmail">Sale Price</label>
                            <input name="products[sale_price]" class="form-control ProductsSalePrice" id="ProductsSalePrice" type="number" placeholder="e.g. 400">
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="control-label" for="inputEmail">Discount Price</label>
                            <input name="discount" class="form-control discount" id="discount" type="number" placeholder="e.g. 100" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label class="control-label" for="inputEmail">Add Categories</label>
                            <select class="form-control" name="product_categories[id][]" id="addCategoryTrgr" multiple>
                                
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="control-label" for="inputEmail">Add Tags</label>
                            <select class="form-control" name="product_tags[id][]" id="addTagTrgr" multiple>
                                
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="control-label" for="inputEmail">Select Language</label>
                            <select class="form-control" name="product_language[id]" id="addLanguageTrgr" multiple>
                                
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
    CKEDITOR.replace( 'ProductsDescription', {
        toolbar :  [
            { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline' ] },
            { name: 'document', items: [ 'Source' ] },
            { name: 'clipboard', items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] }
        ]
    });
</script>
<script>

    

    $(document).ready(function(){


        $(document).on('keyup', '#productsTitle', function(){
            var title = $(this).val();
            var title1 = title.toLowerCase();
            var title2 = title1.replace(/[^\w ]+/g,' ');
            var title3 = title2.replace(/ +/g,'-');
            $('#productsSlug').val(title3);
            /*.toLowerCase();
            .replace(/[^\w ]+/g,'')
            .replace(/ +/g,'-')*/
        });

        $(document).on('keyup', '.ProductsSalePrice, .ProductsRegularPrice', function(){
            var rp = parseInt($('.ProductsRegularPrice').val());
            var sp = parseInt($('.ProductsSalePrice').val());
            var discount = parseInt(rp-sp);

            if(discount < 0) {
                $('.ProductsSalePrice').val(rp);
                discount = 0;
            }
            $('.discount').val(discount);
        });


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