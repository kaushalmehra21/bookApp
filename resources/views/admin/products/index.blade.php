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
                            <th>Title</th>
                            <th>Regular Price</th>
                            <th>Sale Price</th>
                            <th>Language</th>
                            <th>Owner</th>
                            <th>Manage Images</th>
                            <th>Updated</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>1</td>
                            <td>
                                <span title="{{ $product['sub_title'] }}" >
                                {{ $product['title'] }}
                                </span><br>
                                <span>
                                    {{ date('d-m-Y', strtotime($product['created_at'])) }}
                                </span>
                            </td>
                            <td><span title="{{ $product['regular_price'] }}" >{{ $product['regular_price'] }}</span></td>
                            <td><span title="{{ $product['sale_price'] }}" >{{ $product['sale_price'] }}</span></td>
                            <td><span title="{{ $product['languages']['title'] }}" >{{ $product['languages']['title'] }}</span></td>
                            <td><span title="{{ $product['users']['email'] }}" >{{ $product['users']['name'] }}</span></td>
                            <td><a href="{{ url('/admin/products/'.$product['id'].'/images') }}">Manage Images</a></td>
                            <td>{{ date('d-m-Y|H:i', strtotime($product['updated_at'])) }}</td>
                            <td>
                                <a href="{{ url('/admin/products/'.$product['id'].'/edit') }}">Edit</a> | 
                                <a href="{{ url('/admin/products/'.$product['id'].'/destroy') }}">Delete</a> | 
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