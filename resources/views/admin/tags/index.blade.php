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
                    <a class="btn btn-info" href="{{ url('admin/tags/create') }}">Add New Tag</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-title">Tags</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tags as $key => $tag)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $tag['title'] }}</td>
                            <td>{{ $tag['created_at'] }}</td>
                            <td>
                                <a href="{{ url('/admin/tags/'.$tag['id'].'/destroy') }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection