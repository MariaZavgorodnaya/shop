@extends('adminLayout')

@section('content')
    <section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <h3>Posts</h3>
                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->

            <div class="row">
                <div class="col-xs-12">
                    <div class="with_border with_padding">

                        <div class="row admin-table-filters">
                            <div class="col-lg-9">

                                <form action="./" class="form-inline filters-form">
											<span>
												<label class="grey" for="with-selected">With Selected:</label>
												<select class="form-control with-selected" name="with-selected"
                                                        id="with-selected">
													<option value="">-</option>
													<option value="approve">Approve</option>
													<option value="publish">Publish</option>
													<option value="delete">Delete</option>
												</select>
											</span>
                                    <span>
												<label class="grey" for="orderby">Sort By:</label>
												<select class="form-control orderby" name="orderby" id="orderby">
													<option value="date" selected>Date</option>
													<option value="author">Author</option>
													<option value="title">Title</option>
													<option value="status">Status</option>
												</select>
											</span>

                                    <span>
												<label class="grey" for="showcount">Show:</label>
												<select class="form-control showcount" name="showcount" id="showcount">
													<option value="10" selected>10</option>
													<option value="20">20</option>
													<option value="30">30</option>
													<option value="50">50</option>
													<option value="100">100</option>
												</select>
											</span>
                                </form>

                            </div>
                            <!-- .col-* -->
                            <div class="col-lg-3 text-lg-right">
                                <div class="widget widget_search">

                                    <form method="get" class="searchform" action="./">
                                        <!-- <div class="form-group-wrap"> -->
                                        <div class="form-group">
                                            <label class="sr-only" for="widget-search">Search for:</label>
                                            <input id="widget-search" type="text" value="" name="search"
                                                   class="form-control" placeholder="Search Keyword">
                                        </div>
                                        <button type="submit" class="theme_button color1">Search</button>
                                        <!-- </div> -->
                                    </form>
                                </div>

                            </div>
                            <!-- .col-* -->
                        </div>
                        <!-- .row -->


                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <td class="media-middle text-center">
                                        <input type="checkbox">
                                    </td>
                                    <th>Title:</th>
                                    <th>Author:</th>
                                    <th>Date:</th>
                                    <th>Categories:</th>
                                    <th>Status:</th>
                                </tr>
                                @foreach($users as $user)
                                <tr class="item-editable">
                                    <td class="media-middle text-center">
                                        <input type="checkbox">
                                    </td>

                                    <td class="media-middle">
                                        <h5>
                                            <a href="/admin-post/{{$user->id}}">
                                                {{ $user->title }}
                                            </a>
                                        </h5>
                                    </td>
                                    <td>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/team/01.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    <a href="admin_profile.html">{{$user->name}}</a>
                                                </h5>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="media-middle">
                                        <p class="entry-date">{{$user->publish_create}} at
                                            {{$user->publish_time}}
                                        </p>
                                    </td>
                                    <td class="media-middle">
                                        uncategorized, category1
                                    </td>
                                    <td class="media-middle">
                                        Published
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>

                        <!-- .table-responsive -->
                    </div>
                    <!-- .with_border -->
                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="pagination highlightlinks">

                                @for($i = 1; $i <= $pages; $i++)

                                    <li class="@if($i == $users->currentPage()) active @endif"><a href="?page={{$i}}">{{$i}}</a></li>
                                    @endfor

                            </ul>
                        </div>
                        <div class="col-md-6 text-md-right">
                            Showing 1 to 6 of 12 items
                        </div>
                    </div>
                </div>
            </div>
            <!-- .row main columns -->
        </div>
        <!-- .container -->
    </section>
@endsection
