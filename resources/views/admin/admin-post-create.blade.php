@extends('adminLayout')

@section('content')
    <section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <h3>Single Post
                        <small class="pull-right">
                            <a href="/admin-comments">
                                <i class="fa fa-comments"></i> Post discussion</a>
                        </small>
                    </h3>
                </div>
            </div>
            <!-- .row -->


            <form class="form-horizontal" method="post">

                <div class="row">
                    <div class="col-md-8">
                        <div class="with_border with_padding">

                            <h4>
                                Post text
                                <span class="pull-right">
											  <button type="submit" class="theme_button wide_button">Submit</button>
										</span>

                            </h4>

                            <hr>

                            @if($errors !== null && $errors->has('title'))
                                @foreach($errors->get('title') as $error)
                                    {{$error}}<br>
                                @endforeach
                            @endif
                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Post title: </label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>

                            </div>
                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Author: </label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="author" id="author" name="title">
                                </div>

                            </div>
                            <!--<div class="row form-group">
                                <label class="col-lg-3 control-label">Post slug: </label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>-->
                            @if($errors !== null && $errors->has('category'))
                                @foreach($errors->get('category') as $error)
                                    {{$error}}<br>
                                @endforeach
                            @endif
                             <div class="row form-group">
                                 <label class="col-lg-3 control-label">Categories: </label>
                                 <div class="col-lg-9">
                                     <input type="text" name="category" class="form-control">
                                 </div>
                             </div>
                            @if($errors !== null && $errors->has('desc'))
                                @foreach($errors->get('desc') as $error)
                                    {{$error}}<br>
                                @endforeach
                            @endif
                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Post Description: </label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="desc" name="desc">
                                </div>
                            </div>
                            @if($errors !== null && $errors->has('category-key'))
                                @foreach($errors->get('category-key') as $error)
                                    {{$error}}<br>
                                @endforeach
                            @endif
                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Post Category: </label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="" name="category-key">
                                </div>
                            </div>
                            @if($errors !== null && $errors->has('category-slug'))
                                @foreach($errors->get('category-slug') as $error)
                                    {{$error}}<br>
                                @endforeach
                            @endif
                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Post url: </label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="category" name="category-slug">
                                </div>
                            </div>
                            @if($errors !== null && $errors->has('content'))
                                @foreach($errors->get('content') as $error)
                                    {{$error}}<br>
                                @endforeach
                            @endif
                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Post content: </label>
                                <div class="col-lg-9">
                                    <textarea rows="8" class="form-control" id="content" name="content"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <input type="submit" class="theme_button wide_button" value="Save Post">

                                </div>
                            </div>
                            <!-- .row  -->

                        </div>
                        <!-- .with_border -->

                    </div>
                    <!-- .col-* -->


                    <div class="col-md-4">

                        <div class="with_border with_padding bottommargin_10">

                            <h4>Post Meta</h4>

                            <hr>
                            @if($errors !== null && $errors->has('pub_date'))
                                @foreach($errors->get('pub_date') as $error)
                                    {{$error}}<br>
                                @endforeach
                            @endif
                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Publish date: </label>
                                <div class="col-lg-9">
                                    <input type="date" class="form-control" name="pub_date">
                                </div>
                            </div>
                            @if($errors !== null && $errors->has('pub_time'))
                                @foreach($errors->get('pub_time') as $error)
                                    {{$error}}<br>
                                @endforeach
                            @endif
                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Publish time: </label>
                                <div class="col-lg-9">
                                    <input type="time" class="form-control" name="pub_time">
                                </div>
                            </div>
                            @if($errors !== null && $errors->has('post-published'))
                                @foreach($errors->get('post-published') as $error)
                                    {{$error}}<br>
                                @endforeach
                            @endif
                            <div class="row">
                                <label class="col-lg-3 control-label">Status: </label>
                                <div class="col-lg-9">
                                    <label class="radio-inline">
                                        <input type="radio" name="post-published" id="post-bublished1" value="draft"
                                               checked="checked"> Draft
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="post-published" id="post-bublished2"
                                               value="published"> Published
                                    </label>
                                </div>
                            </div>


                        </div>
                        <!-- .with_border -->

                        <div class="with_border with_padding">

                            <h4>Post Media</h4>

                            <hr>

                            <div class="item-editable bottommargin_20">

                                @if($errors !== null && $errors->has('pic'))
                                    @foreach($errors->get('pic') as $error)
                                        {{$error}}<br>
                                    @endforeach
                                @endif
                                <div class="item-media">
                                    <input type="file" name="pic" value="">
                                    <p class="help-block">Select image</p>
                                </div>

                                <div class="item-edit-controls darklinks">
                                    <a href="#">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </div>
                            </div>
                            @if($errors !== null && $errors->has('video'))
                                @foreach($errors->get('video') as $error)
                                    {{$error}}<br>
                                @endforeach
                            @endif
                            <div>
                                <label class="control-label">Post Video: </label>
                                <input type="file" class="form-control" name="video">
                                <p class="help-block">Select video</p>
                            </div>

                        </div>
                        <!-- .with_border -->

                    </div>
                    <!-- .col-* -->


                </div>
                <!-- .row  -->


            </form>

        </div>
        <!-- .container -->
    </section>
@endsection
