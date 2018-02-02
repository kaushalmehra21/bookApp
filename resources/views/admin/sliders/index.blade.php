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
                <h3 class="card-title">Bordered Table</h3>
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
                                            <input type="checkbox" id="cbStatus_{{ $slider['id'] }}"  {{ ($slider['status']==1) ? 'checked' : '' }} >
                                            <span class="button-indecator statusTrgr" data-slider-id={{ $slider['id'] }}></span>
                                            <input type="text" name="id" id="id_{{ $slider['id'] }}" value="{{ $slider['id'] }}">
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
                <input type="text" name="_token" id="_token" value="{{ csrf_token() }}">
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            
            $(document).on('click', '.statusTrgr', function(){

                var slider_id = $(this).attr('data-slider-id');

                if($('#cbStatus_'+slider_id).prop('checked')==true) 
                {
                    $.ajax({
                        type    : "POST",
                        url     : "store/search-ajax",
                        data    : {

                        },
                        success : function(html) {
                            console.log(html);
                        }
                    });
                }
                


                alert();
                /**/
            });
        });
        
    </script>
@endsection