@extends('adminLayout')

@section('content')
    <section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <h3>{{$post->title}}
                        <small class="pull-right">
                            <a href="/admin-comments">
                                <i class="fa fa-comments"></i> Post discussion</a>
                        </small>
                    </h3>
                </div>
            </div>
            <!-- .row -->


            <div class="row">
                <div class="col-md-8">
                    <div class="with_border with_padding">

                        {{$post->content}}<br>
                      {{$post->publish_create}}<br>
                        {{$post->publish_time}}<br>

                    </div>
                    <!-- .with_border -->

                </div>
                <!-- .col-* -->


            </div>
            <!-- .row  -->


        </div>
        <!-- .container -->
    </section>
@endsection
