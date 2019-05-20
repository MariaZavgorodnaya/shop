@extends('adminLayout')

@section('content')
    <section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <h3>Twitter Bootstrap
                        <small>elements</small>
                    </h3>
                </div>
            </div>
            <!-- .row -->

            <div class="row">
                <div class="col-md-6">
                    <div class="with_border with_padding">

                        <h4>Bootstrap Alerts</h4>

                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">×</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>Well done!</strong> You successfully read this important alert message.
                        </div>
                        <div class="alert alert-info" role="alert">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">×</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                        </div>
                        <div class="alert alert-warning" role="alert">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">×</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>Warning!</strong> Better check yourself, you're not looking too good.
                        </div>
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">×</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>Oh snap!</strong> Change a few things up and try submitting again.
                        </div>


                    </div>
                    <!-- .with_border -->

                </div>
                <!-- .col-* -->

                <div class="col-md-6">
                    <div class="with_border with_padding">


                        <h4>Collapse Accordion</h4>
                        <div class="panel-group" id="accordion2">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse5">
                                            Lorem Ipsum
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img src="images/recent_post1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                Consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse6" class="collapsed">
                                            Sit Amet
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse6" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img src="images/recent_post2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                Consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse7" class="collapsed">
                                            Sed Diam
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse7" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img src="images/recent_post1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                Consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse8" class="collapsed">
                                            Eirmod Tempor
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse8" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img src="images/recent_post2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                Consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                    <!-- .with_border -->

                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->


            <div class="row">
                <div class="col-md-6">
                    <div class="with_border with_padding">
                        <h4>Progress Bars</h4>

                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="90">
                                <span>90%</span>
                            </div>
                        </div>

                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="52">
                                <span>52%</span>
                            </div>
                        </div>


                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" data-transitiongoal="75">
                                <span>75%</span>
                            </div>
                        </div>

                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal="95">
                                <span>95%</span>
                            </div>
                        </div>

                    </div>
                    <!-- .with_border -->

                </div>
                <!-- .col-* -->


                <div class="col-md-6">
                    <div class="with_border with_padding">

                        <h4>Tabs</h4>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Tab 1</a></li>
                            <li><a href="#tab2" role="tab" data-toggle="tab">Tab 2</a></li>
                            <li><a href="#tab3" role="tab" data-toggle="tab">Tab 3</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi minus tenetur sunt aspernatur vitae, corporis nostrum quibusdam molestias, laudantium quia in a natus facilis beatae culpa inventore quidem illo atque.</p>
                            </div>
                            <div class="tab-pane fade" id="tab2">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, enim saepe libero iure tenetur optio nisi aliquam molestias ratione magnam ab ut quod possimus hic suscipit doloremque, deleniti ipsa quia!</p>
                            </div>
                            <div class="tab-pane fade" id="tab3">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis est, dolores, ex ducimus cumque iusto ipsam odit voluptatum autem error impedit obcaecati quisquam molestiae, optio porro inventore nostrum deleniti cupiditate.</p>
                            </div>
                        </div>

                    </div>
                    <!-- .with_border -->

                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->

        </div>
        <!-- .container -->
    </section>
@endsection
