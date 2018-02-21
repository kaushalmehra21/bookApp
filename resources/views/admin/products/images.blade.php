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
                <div class="col-md-4">&nbsp;</div>
                <div class="col-md-4">&nbsp;</div>
                <div class="col-md-4" style="text-align: right;">
                    <a class="btn btn-info" href="{{ url('admin/products/create') }}">Add New Category</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-title">Bordered Table</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Images</th>
                            <th>Make Default</th>
                            <th>Updated</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productImages as $productImage)
                        <tr>
                            <td>1</td>
                            <td><img src="{{ $productImage['file'] }}" style="width: 100px"> </td>
                            <td>
                                <?php
                                if($productImage['is_default'] == 1){
                                    echo 'Default';
                                } else { ?>
                                    <a href="{{ url('/admin/product-images/'.$productImage['id'].'/make-default') }}">Make this Default</a>
                                <?php } ?>
                            </td>
                            <td>{{ $productImage['updated_at'] }}</td>
                            <td>
                                <a href="{{ url('/admin/product-images/'.$productImage['id'].'/destroy') }}">Delete</a> | 
                                <a href="">View</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection