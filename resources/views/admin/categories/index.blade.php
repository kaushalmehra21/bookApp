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
                    <a class="btn btn-info" href="{{ url('admin/categories/create') }}">Add New Category</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-title">Categories</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Parent</th>
                            <th>Updated</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $key => $category)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $category['title'] }}</td>
                            <td>{{ $category['description'] }}</td>
                            <td>{{ $category['parent_id'] }}</td>
                            <td>{{ $category['created_at'] }}</td>
                            <td>{{ $category['updated_at'] }}</td>
                            <td>
                                <a href="{{ url('/admin/categories/'.$category['id'].'/edit') }}">Edit</a> | 
                                <a href="{{ url('/admin/categories/'.$category['id'].'/destroy') }}">Delete</a> | 
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