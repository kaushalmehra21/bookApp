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
                            <th>Image</th>
                            <th>Make Default</th>
                            <th>Updated</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productImages as $productImage)
                        <tr>
                            <td>1</td>
                            <td>{{ $productImage['file'] }}</td>
                            <td>{{ $productImage['created_at'] }}</td>
                            <td>{{ $productImage['updated_at'] }}</td>
                            <td><a href="{{ url('/admin/products/'.$product['id'].'/edit') }}">Manage Images</a></td>
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