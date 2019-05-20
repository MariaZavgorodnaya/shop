@extends('adminLayout')

@section('content')
    <section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <h3>Comment Summary</h3>
                </div>
            </div>
            <!-- .row -->

            <form class="form-horizontal">

                <div class="row">
                    <div class="col-md-12">
                        <div class="with_border with_padding">

                            <h4>
                                Comment Totals
                                <span class="pull-right">
											<button type="submit" class="theme_button small_button">Save comment</button>
										</span>
                            </h4>

                            <hr>
                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Publish date: </label>
                                <div class="col-lg-9">
                                    <input type="date" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Publish time: </label>
                                <div class="col-lg-9">
                                    <input type="time" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Comment title: </label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" value="Incididunt ut labore et dolore">
                                </div>
                            </div>

                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Comment rating:</label>
                                <div class="col-lg-9">
                                    <select class="form-control">
                                        <option selected="">5.00</option>
                                        <option>5.00</option>
                                        <option>4.50</option>
                                        <option>4.00</option>
                                        <option>3.50</option>
                                        <option>3.00</option>
                                        <option>2.50</option>
                                        <option>2.00</option>
                                        <option>1.50</option>
                                        <option>1.00</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Comment text: </label>
                                <div class="col-lg-9">
                                    <textarea rows="5" class="form-control">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Comment status:</label>
                                <div class="col-lg-9">
                                    <select class="form-control">
                                        <option selected="">Approved</option>
                                        <option>Approved</option>
                                        <option>Span</option>
                                        <option>Canceled</option>
                                        <option>Deleted</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="theme_button wide_button">Save comment</button>
                                    <a href="admin_comments.html" class="theme_button inverse wide_button">Cancel</a>
                                </div>
                            </div>
                            <!-- .row  -->

                        </div>
                        <!-- .with_border -->

                    </div>
                    <!-- .col-* -->
                </div>
                <!-- .row  -->
            </form>

            <div class="row flex-row">

                <div class="col-md-6">
                    <div class="with_border with_padding">
                        <h5>
                            User Info:
                        </h5>
                        <ul class="list1 no-bullets">

                            <li>
                                <div class="media">

                                    <div class="media-left">
                                        <img src="images/team/01.jpg" alt="...">
                                    </div>
                                    <div class="media-body media-middle">
                                        <h5 class="bottommargin_0">
                                            <a href="admin_profile.html">Alex Walker</a>
                                        </h5>
                                        &lt;email@example.com&gt;

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-success fontsize_16">
                                            <i class="fa fa-comments"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Comments:
                                        </strong>
                                        146
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-info fontsize_16">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Member sicne:
                                        </strong>
                                        12/10/2014
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon label-warning fontsize_16">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <strong class="grey">
                                            Orders:
                                        </strong>
                                        12
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <!-- .muted_background -->
                </div>
                <!-- .col-* -->
                <div class="col-md-6">
                    <div class="with_border with_padding">

                        <form method="post" action="./">
                            <div class="wrap-forms">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4>Answer to The Comment</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group has-placeholder">
                                            <label for="form-id-1">Title
                                                <sup>*</sup>
                                            </label>
                                            <input class="form-control" type="text" name="name" placeholder="Title" value="" id="form-id-1" required="required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group has-placeholder">
                                            <label for="form-id-4">Message
                                                <sup>*</sup>
                                            </label>
                                            <textarea class="form-control" name="message" placeholder="Message" id="form-id-4" required="required" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row"></div>
                            </div>
                            <div class="wrap-forms">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input class="theme_button wide_button color1" type="submit" value="Answer">
                                        <input class="theme_button wide_button" type="reset" value="Clear">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>

@endsection
