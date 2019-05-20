
@extends('blogLayout')

@section('content')
<section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_25">
        <div class="container">
            <div class="row">


                <div class="col-sm-12">
                    <div class="intro_section ds blog_slider bottommargin_60">
                        <div class="flexslider text-center" data-nav="false">
                            <ul class="slides">

                                <li>
                                    <img src="images/gallery/01.jpg" alt="">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 text-center">
                                                <div class="slide_description_wrapper">
                                                    <div class="slide_description">
                                                        <div class="intro-layer" data-animation="fadeInUp">
                                                            <h2>
Every Pet Deserves
<strong>Celebrity Care</strong>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <!-- eof .slide_description -->
                                                </div>
                                                <!-- eof .slide_description_wrapper -->
                                            </div>
                                            <!-- eof .col-* -->
                                        </div>
                                        <!-- eof .row -->
                                    </div>
                                    <!-- eof .container -->
                                </li>

                                <li>
                                    <img src="images/gallery/02.jpg" alt="">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 text-center">
                                                <div class="slide_description_wrapper">
                                                    <div class="slide_description">
                                                        <div class="intro-layer" data-animation="fadeInUp">
                                                            <h2>
Qualified Personal
<strong>Care For Your Pets</strong>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <!-- eof .slide_description -->
                                                </div>
                                                <!-- eof .slide_description_wrapper -->
                                            </div>
                                            <!-- eof .col-* -->
                                        </div>
                                        <!-- eof .row -->
                                    </div>
                                    <!-- eof .container -->
                                </li>

                                <li>
                                    <img src="images/gallery/03.jpg" alt="">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 text-center">
                                                <div class="slide_description_wrapper">
                                                    <div class="slide_description">
                                                        <div class="intro-layer" data-animation="fadeInUp">
                                                            <h2>
Every Pet Deserves
<strong>Celebrity Care</strong>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <!-- eof .slide_description -->
                                                </div>
                                                <!-- eof .slide_description_wrapper -->
                                            </div>
                                            <!-- eof .col-* -->
                                        </div>
                                        <!-- eof .row -->
                                    </div>
                                    <!-- eof .container -->
                                </li>


                            </ul>
                        </div>
                        <!-- eof flexslider -->
                    </div>
                </div>

                <div class="col-sm-7 col-md-8 col-lg-8">

                    <article
                            class="vertical-item content-padding big-padding post format-standard with_shadow rounded overflow-hidden">
@forelse($posts as $post)

                            <div class="item-media entry-thumbnail">
                                <img src="{{$post->cover}}" alt="">
                            </div>

                            <div class="item-content entry-content">
                                <header class="entry-header">

                                    <p class="content-justify item-meta">
									<span class="entry-date highlight3 small-text">
										<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
											{{$post->created_at}}
										</time>
									</span>
                                    </p>

                                    <h4 class="entry-title hover-color3">
                                        <a href="blog-single-right.html" rel="bookmark">{{$post->title}}</a>


                                    </h4>

                                   <p>{{ $post->key }}</p>
                                <!-- .entry-meta -->
<p>{{ $post -> description }}</p>
                                </header>
                                <!-- .entry-header -->

                                <p>{{$post->content}}</p>


                            </div>
                            <!-- .item-content.entry-content -->
                        @empty<p>Нет постов</p>
@endforelse
                    </article>

                    <!-- .post -->


                    <div class="row topmargin_60">
                        <div class="col-sm-12 text-center">
                            <ul class="pagination highlightlinks">

@for($i = 0; $i <= $pages; $i++)

                                    <li class="@if($i == $posts->currentPage()-1) active @endif"><a href="?page={{$i+1}}">{{$i+1}}</a></li>
@endfor
                                <!--<li>
                                    <a href="#">
                                        <span class="sr-only">Prev</span>
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#">
                                        <span class="sr-only">Next</span>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                </li>-->
                            </ul>
                        </div>
                    </div>

                </div>
                <!--eof .col-sm-8 (main content)-->
@endsection

