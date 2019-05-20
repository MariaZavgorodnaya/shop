@extends('mainLayout')

@section('content')
    <section class="page_breadcrumbs ds background_cover background_overlay section_padding_top_65 section_padding_bottom_65">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="highlight">{{$title}}</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="./">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                        </li>
                        <li class="active">{{$title}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_top_100 section_padding_bottom_100">
        <div class="container">
            <div class="row columns_padding_25 columns_margin_bottom_20">
                <div class="col-md-6">
                    <img src="images/gallery/06.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <h2 class="section_header with_icon icon_color4">
                        Combing
                    </h2>
                    <p>
                        Ground round pancetta flank venison sausage turducken pork andouille ham alcatra. Corned beef t-bone brisket alcatra tenderloin jerky meatball meatloaf shank beef ribs hamburger pork chop. Sausage pork chop pork belly.
                    </p>
                    <ul class="list2 grey medium">
                        <li>Meatloaf ground round andouille chic</li>
                        <li>Bacon landjaeger kielbasa ham hock</li>
                        <li>Sirloin frankfurter biltong pig salami</li>
                        <li>Ribeye laborum non ullamco</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>
                        Venison burgdoggen meatloaf, jerky filet mignon drumstick beef ribs turducken boudin. Ribeye strip steak shoulder, salami pork jowl prosciutto pork chop boudin turkey corned beef. Andouille biltong ribeye chuck ball tip brisket turducken ground round, kevin turkey ham. Picanha chicken t-bone, boudin tail doner capicola drumstick flank shoulder hamburger short ribs.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <footer class="page_footer ds parallax section_padding_top_100 section_padding_bottom_65 columns_padding_25">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-12 text-center to_animate" data-animation="fadeInUp">
                    <div class="widget">
                        <a href="./" class="logo bottommargin_20">
                            <img src="images/logo.png" alt="">
                        </a>
                        <p>
                            Pork loin venison andouille filet mignon picanha. Prosciutto brisket chuck, ham sausage beef ribs corned.
                        </p>
                        <div class="grey topmargin_30">
                            <div class="media small-teaser inline-block margin_0">
                                <div class="media-left media-middle">
                                    <i class="fa fa-map-marker highlight3" aria-hidden="true"></i>
                                </div>
                                <div class="media-body media-middle">
                                    253 Adams Ave, Iowa
                                </div>
                            </div>
                            <br>
                            <div class="media small-teaser inline-block margin_0">
                                <div class="media-left media-middle">
                                    <i class="fa fa-phone highlight3" aria-hidden="true"></i>
                                </div>
                                <div class="media-body media-middle">
                                    8 800 269 8469
                                </div>
                            </div>
                            <br>
                            <div class="media small-teaser inline-block margin_0">
                                <div class="media-left media-middle">
                                    <i class="fa fa-envelope highlight3" aria-hidden="true"></i>
                                </div>
                                <div class="media-body media-middle darklinks color3">
                                    <a href="#">pet_salon@support.com</a>
                                </div>
                            </div>
                            <div class="media small-teaser inline-block margin_0">
                                <div class="media-left media-middle">
                                    <i class="fa fa-internet-explorer highlight3" aria-hidden="true"></i>
                                </div>
                                <div class="media-body media-middle darklinks color3">
                                    <a href="#">www.pet_salon.com</a>
                                </div>
                            </div>
                        </div>

                        <div class="darklinks topmargin_25">
                            <a href="#" class="social-icon border-icon rounded-icon soc-twitter"></a>
                            <a href="#" class="social-icon border-icon rounded-icon soc-twitter"></a>
                            <a href="#" class="social-icon border-icon rounded-icon soc-google"></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 text-center to_animate" data-animation="fadeInUp">
                    <div class="widget widget_contact topmargin_30">
                        <h3>Contact Form</h3>
                        <form class="contact-form topmargin_45" method="post" action="./">
                            <p class="form-group">
                                <label for="footer-name">Name <span class="required">*</span></label>
                                <i class="fa fa-user highlight3" aria-hidden="true"></i>
                                <input type="text" aria-required="true" size="30" value="" name="name" id="footer-name" class="form-control" placeholder="Full Name">
                            </p>
                            <p class="form-group">
                                <label for="footer-email">Email <span class="required">*</span></label>
                                <i class="fa fa-envelope highlight3" aria-hidden="true"></i>
                                <input type="email" aria-required="true" size="30" value="" name="email" id="footer-email" class="form-control" placeholder="Email Address">
                            </p>
                            <p class="form-group">
                                <label for="footer-message">Message</label>
                                <i class="fa fa-comment highlight3" aria-hidden="true"></i>
                                <textarea aria-required="true" rows="3" cols="45" name="message" id="footer-message" class="form-control" placeholder="Message..."></textarea>
                            </p>
                            <p class="footer_contact-form-submit topmargin_20">
                                <button type="submit" id="footer_contact_form_submit" name="contact_submit" class="theme_button color3 wide_button">Send Now</button>
                            </p>
                        </form>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 text-center to_animate" data-animation="fadeInUp">

                    <div class="widget widget_recent_entries topmargin_30">
                        <h3 class="widget-title">Recent Posts</h3>
                        <ul>
                            <li>
                                <h6 class="hover-color3">
                                    <a href="blog-single-left.html">
                                        <strong>Capicola pig chuck tongue ham corned beef</strong>
                                    </a>
                                </h6>
                                <p class="margin_0 lineheight_thin">
                                    Doner jerky tenderloin sausage short loin, picanha short ribs pig ham pork belly venison ham hock chicken.
                                </p>
                                <span class="entry-date small-text highlight3">
											<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
												April 04, 2017
											</time>
										</span>
                            </li>
                            <li>
                                <h6 class="hover-color3">
                                    <a href="blog-single-left.html">
                                        <strong>Frankfurter chuck pork belly shoul strip steak </strong>
                                    </a>
                                </h6>
                                <p class="margin_0 lineheight_thin">
                                    Ribeye cupim turducken, pork chop tongu meatball pork loin beef picanha shan pastrami kevin jerky.
                                </p>
                                <span class="entry-date small-text highlight3">
											<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
												March 26, 2017
											</time>
										</span>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </footer>

    <section class="ls page_copyright section_padding_15">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>&copy; Copyright 2017 All Rights Reserved</p>
                </div>
            </div>
        </div>
    </section>

    </div>
    <!-- eof #box_wrapper -->
    </div>
    <!-- eof #canvas -->

    <script src="js/compressed.js"></script>
    <script src="js/main.js"></script>


@endsection
