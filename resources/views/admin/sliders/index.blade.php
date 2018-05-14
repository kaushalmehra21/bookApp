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
                    <a class="btn btn-info" href="{{ url('admin/sliders/create') }}">Add New Slider</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-title">Slider Images</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sliders as $key=>$slider)
                            <?php $key += 1; ?>
                            <tr>
                                <td>{{ $key }}</td>
                                <td>{{ $slider['title'] }}</td>
                                <td><img src="{{ $slider['image'] }}" width="100%" style="max-width: 100px;"></td>
                                <td>
                                    <div class="toggle">
                                        <label>
                                            <input type="checkbox" id="cb_status_{{ $slider['id'] }}"  {{ ($slider['status']==1) ? 'checked' : '' }} >
                                            <span class="button-indecator statusTrgr" data-slider-id={{ $slider['id'] }}></span>
                                            
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ url('/admin/sliders/'.$slider['id'].'/destroy') }}" ><i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            
            $(document).on('click', '.statusTrgr', function(){

                $.notify({
                    title: "Update Complete : ",
                    message: "Something cool is just updated!",
                    icon: 'fa fa-check' 
                },{
                    type: "success"
                });

                var slider_id = $(this).attr('data-slider-id');
                var cb_status = $('#cb_status_'+slider_id).attr('checked');
                var _token = $('#_token').val();

                $.ajax({
                    type    : "POST",
                    url     : "sliders/update",
                    async : true,
                    data    : {
                        'id' : slider_id,
                        '_token' : _token
                    },
                    success : function(html) {
                        console.log(html);
                    }
                });
            });
        });
        
    </script>
@endsection