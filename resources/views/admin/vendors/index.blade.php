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
                    <a class="btn btn-info" href="{{ url('admin/vendors/create') }}">Add New Vendor</a>
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Business Detail</th>
                            <th>Bank Detail</th>
                            <th>Store Detail</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vendors as $vendor)
                        <tr>
                            <td>1</td>
                            <td>{{ $vendor['users']['name'] }}</td>
                            <td>{{ $vendor['users']['email'] }}</td>
                            <td><a href="{{ url('/admin/vendors/'.$vendor['user_id'].'/business-detail/edit') }}">Complete Profile</a></td>
                            <td><a href="{{ url('/admin/vendors/'.$vendor['user_id'].'/bank-detail/edit') }}">Complete Profile</a></td>
                            <td><a href="{{ url('/admin/vendors/'.$vendor['user_id'].'/store-detail/edit') }}">Complete Profile</a></td>
                            <td>{{ $vendor['created_at'] }}</td>
                            <td>
                                <a href="{{ url('/admin/users/'.$vendor['id'].'/edit') }}">Edit</a> |
                                <a href="{{ url('/admin/users/'.$vendor['id']) }}">View</a> |
                                <a href="{{ url('/admin/users/'.$vendor['id']).'/destroy' }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection