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
                    <!-- <a class="btn btn-info" href="{{ url('admin/site_options/create') }}">Add New Slider</a> -->
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-title">Bordered Table</h3>
                <form method="post" action="/admin/site-option" class="form-horizontal" >
                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Key</th>
                                <th>Value</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siteOptions as $key=>$siteOption)
                                <?php $key += 1; ?>
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td>{{ $siteOption['option_key'] }}</td>
                                    <td>{{ $siteOption['option_value'] }}</td>
                                    <td>
                                        <a href="{{ url('/admin/site-option/'.$siteOption['id'].'/edit') }}" ><i class="fa fa-pencil"></i> Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td>#</td>
                                <td>
                                    <input type="text" class="form-controll" name="site_options[option_key]">
                                </td>
                                <td><input type="text" class="form-controll" name="site_options[option_value]"></td>
                                <td>
                                    <input type="submit" class="form-controll" name="submit" value="Add" >
                                </td>
                            </tr>
                        </tbody>
                    </table>    
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){

        });
        
    </script>
@endsection