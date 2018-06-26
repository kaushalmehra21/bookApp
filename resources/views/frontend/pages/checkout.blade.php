@extends('layouts.frontend.page')

@section('topbar')
    @include('frontend.header.topbar')
@endsection


@section('content')
    
    <main class="main-content">

        <!-- Service And Mission -->
        <section class="tc-padding-top tc-padding-bottom white-bg">
            <div class="container">

                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse1">Login/Resister</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="col-md-4" ></div>
                                <div class="col-md-4" >
                                    <form class="weekly-newsletter">
                                        <div class="form-group">
                                            <input class="form-control" required="required" placeholder="tommy adam">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" required="required" placeholder="domain@live.com">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <button class="btn-1 sm full-width shadow-0">submit</button>
                                    </form>
                                </div>
                                <div class="col-md-4" ></div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse2">Login/Resister</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <form class="weekly-newsletter">
                                <div class="form-group">
                                    <input class="form-control" required="required" placeholder="tommy adam">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required="required" placeholder="domain@live.com">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <button class="btn-1 sm full-width shadow-0">submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                Login/Resister
                            </a>
                        </div>
                        <div id="collapseOne" class="accordion-body collapse in">
                            <div class="accordion-inner">
                                <form class="weekly-newsletter">
                                    <div class="form-group">
                                        <input class="form-control" required="required" placeholder="tommy adam">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" required="required" placeholder="domain@live.com">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <button class="btn-1 sm full-width shadow-0">submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                Collapsible Group Item #2
                            </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                            <div class="accordion-inner">
                                Anim pariatur cliche...
                            </div>
                        </div>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                Collapsible Group Item #2
                            </a>
                        </div>
                        <div id="collapseThree" class="accordion-body collapse">
                            <div class="accordion-inner">
                                Anim pariatur cliche...
                            </div>
                        </div>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                Collapsible Group Item #2
                            </a>
                        </div>
                        <div id="collapseFour" class="accordion-body collapse">
                            <div class="accordion-inner">
                                Anim pariatur cliche...
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
        </section>
        <!-- Service And Mission -->


    </main>
@endsection
