@extends('frontend.layouts.app')
@section('content')
<div id="main">
    @include('frontend.pages.home')

    @include('frontend.pages.about')

    @include('frontend.pages.service')

    @include('frontend.pages.portfolio')

    @include('frontend.pages.skill')

    <!--experience section start-->
    <div class="experience-section border-top-bottom animated-row">
        <div class="row no-spacing-row">
            @include('frontend.pages.experience')
            @include('frontend.pages.education')
        </div>
        <!--/.row-->
    </div>
    <!--/.education-section-->
    <!--experience section end-->

    @include('frontend.pages.testimonial')

    <!--facts section start-->
    <div class="section facts-section bg-cover bg-overlay parallaxie"
        style="background-image: url(images/bg/facts-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col col-sm-3">
                    <div class="fact-box font-secondary">
                        <span class="fact-icon"><i class="icon-presentation"></i></span>
                        <strong class="counter">186</strong>
                        Launched Projects
                    </div>
                </div>
                <!--/.col-->
                <div class="col col-sm-3">
                    <div class="fact-box font-secondary">
                        <span class="fact-icon"><i class="icon-happy"></i></span>
                        <strong class="counter">150</strong>
                        Happy Customers
                    </div>
                </div>
                <!--/.col-->
                <div class="col col-sm-3">
                    <div class="fact-box font-secondary">
                        <span class="fact-icon"><i class="icon-clock"></i></span>
                        <strong class="counter">48000</strong>
                        Working Hours
                    </div>
                </div>
                <!--/.col-->
                <div class="col col-sm-3">
                    <div class="fact-box font-secondary">
                        <span class="fact-icon"><i class="icon-wine"></i></span>
                        <strong class="counter">8400</strong>
                        Coffee Cups
                    </div>
                </div>
                <!--/.col-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!--/.section-->
    <!--facts section end-->

    @include('frontend.pages.pricing')

    <!--blog section start-->
    {{-- <div id="blog" class="section blog-section bg-black bg-cover bg-overlay parallaxie animated-row"
        style="background-image: url(images/bg/blog-bg.jpg);">
        <div class="container container-small">
            <div class="title-block row text-center">
                <div class="col col-md-6 col-md-push-3">
                    <div class="section-title">
                        <em class="font-weight-600">What i am thinking</em>
                        <h2>Latest Blog</h2>
                        <span class="hexagon-icon"><i></i></span>
                    </div>
                    <!--/.section-title-->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod t empor
                        incididunt ut labore et dolore magna aliqua. quis nostrud exercitat ion.</p>
                </div>
            </div>
            <!--/.title-block-->
            <div class="row">
                <div class="col col-sm-6">
                    <a href="#" class="latest-blog animate" data-animate="fadeInUp">
                        <figure><img src="{{ asset('frontend') }}/images/latest-blog-01.jpg" alt="" /></figure>
                        <div class="latest-blog-content">
                            <strong class="text-primary text-uppercase m-b-5 display-block">Sep 12,
                                2017</strong>
                            <h4 class="m-0">A portrait is not made in the camera but on either side of it.</h4>
                        </div>
                        <!--/.latest-blog-content-->
                    </a>
                    <!--/.latest-blog-->
                </div>
                <!--/.col-->
                <div class="col col-sm-6">
                    <a href="#" class="latest-blog animate" data-animate="fadeInUp">
                        <figure><img src="{{ asset('frontend') }}/images/latest-blog-02.jpg" alt="" /></figure>
                        <div class="latest-blog-content">
                            <strong class="text-primary text-uppercase m-b-5 display-block">Oct 4, 2017</strong>
                            <h4 class="m-0">Bad design is smoke, while good design is a mirror.</h4>
                        </div>
                        <!--/.latest-blog-content-->
                    </a>
                    <!--/.latest-blog-->
                </div>
                <!--/.col-->
            </div>
            <!--/.row-->
            <div class="center-row m-t-50">
                <a href="blog.html" class="btn btn-outline btn-outline-white btn-sm">View all</a>
            </div>
            <!--/.center-block-->
        </div>
        <!--/.container-->
    </div> --}}
    <!--/.section-->
    <!--blog section end-->

    <!--faq section start-->
    {{-- <div class="section faq-section animated-row">
        <div class="container">
            <div class="row">
                <div class="col col-sm-5 animate" data-animate="fadeInUp">
                    <figure><img class="img-responsive" src="{{ asset('frontend') }}/images/faq-img.jpg" alt="" />
                    </figure>
                </div>
                <!--/.col-->
                <div class="col col-sm-7">
                    <div class="panel-group m-0" id="accordion">
                        <div class="panel panel-default accordion-custom">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"
                                        aria-expanded="true">I'm not getting pinged at the store?</a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">Dn ut ullamcorper leo, eget euismod orcite algo este.
                                    Lorem ipsum dolor sit amet, consectetur eres tuo adipiscing elit. Ipsutissem
                                    nibh id elit. Duis sed odio sitamet nibh vulputate cursus a sit amet mauris.
                                    Eget euismod orcite algo este. Lorem ipsum dolor sit amet, consectetur eres
                                    tuo adipiscing elit. Ipsutissem nibh id elit. Duis sed odio sitamet nibh
                                    vulputate cursus a sit amet mauris.
                                </div>
                            </div>
                        </div>
                        <!--/.panel-->
                        <div class="panel panel-default accordion-custom">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">When
                                        will yella be in more stores?</a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">Dn ut ullamcorper leo, eget euismod orcite algo este.
                                    Lorem ipsum dolor sit amet, consectetur eres tuo adipiscing elit. Ipsutissem
                                    nibh id elit. Duis sed odio sitamet nibh vulputate cursus a sit amet mauris.
                                    Eget euismod orcite algo este. Lorem ipsum dolor sit amet
                                </div>
                            </div>
                        </div>
                        <!--/.panel-->
                        <div class="panel panel-default accordion-custom">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Are you
                                        developing Apple watch app?</a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">Dn ut ullamcorper leo, eget euismod orcite algo este.
                                    Lorem ipsum dolor sit amet, consectetur eres tuo adipiscing elit.
                                </div>
                            </div>
                        </div>
                        <!--/.panel-->
                        <div class="panel panel-default accordion-custom">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Why you
                                        required Blutooth be on?</a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">Dn ut ullamcorper leo, eget euismod orcite algo este.
                                    Lorem ipsum dolor sit amet, consectetur eres tuo adipiscing elit. Ipsutissem
                                    nibh id elit. Duis sed odio sitamet nibh vulputate cursus a sit amet mauris.
                                </div>
                            </div>
                        </div>
                        <!--/.panel-->
                    </div>
                </div>
                <!--/.col-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div> --}}
    <!--/.section-->
    <!--faq section end-->

    <!--contact section start-->
    {{-- <div id="contact" class="contact-section">
        <div class="row no-spacing-row">
            <div class="col col-md-6 matchheightbox">
                <div class="contact-box text-black">
                    <div class="row">
                        <div class="col col-sm-6">
                            <div class="contact-info text-center">
                                <span class="contact-icon"><i class="icon-chat"></i></span>
                                <h3 class="text-black">Let's Talk</h3>
                                <span>Phone: 1-800-222-000</span>
                                <span>Fax: 1-800-222-002</span>
                            </div>
                            <!--/.contact-info-->
                        </div>
                        <!--/.col-->
                        <div class="col col-sm-6">
                            <div class="contact-info text-center">
                                <span class="contact-icon"><i class="icon-envelope"></i></span>
                                <h3 class="text-black">Email Us</h3>
                                <span><a href="mailto:no-reply@domain.com">no-reply@domain.com</a></span>
                                <span><a href="mailto:hire@domain.com">hire@domain.com</a></span>
                            </div>
                            <!--/.contact-info-->
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->
                    <form action="#" id="contactform" method="post">
                        <div class="row">
                            <div class="col col-sm-6">
                                <div class="input-field has-icon">
                                    <i class="fa fa-user"></i>
                                    <input type="text" required class="form-control" name="name" placeholder="Name">
                                </div>
                                <!--/.input-field-->
                            </div>
                            <!--/.col-->
                            <div class="col col-sm-6">
                                <div class="input-field has-icon">
                                    <i class="fa fa-mobile"></i>
                                    <input type="tel" required class="form-control" name="phone" placeholder="Phone">
                                </div>
                                <!--/.input-field-->
                            </div>
                            <!--/.col-->
                            <div class="col col-sm-6 col-xs-12">
                                <div class="input-field has-icon">
                                    <i class="fa fa-envelope"></i>
                                    <input type="email" required class="form-control" name="email" placeholder="Email">
                                </div>
                                <!--/.input-field-->
                            </div>
                            <!--/.col-->
                            <div class="col col-sm-6 col-xs-12">
                                <div class="input-field has-icon">
                                    <i class="fa fa-server"></i>
                                    <div class="custom-select">
                                        <select>
                                            <option>What are you interested in?</option>
                                            <option>Design</option>
                                            <option>Development</option>
                                            <option>SEO</option>
                                        </select>
                                    </div>
                                    <!--/.custom-select-->
                                </div>
                                <!--/.input-field-->
                            </div>
                            <!--/.col-->
                            <div class="col col-xs-12">
                                <div class="input-field has-icon">
                                    <i class="fa fa-file-text"></i>
                                    <textarea class="form-control" required name="message"
                                        placeholder="Decribe your project"></textarea>
                                </div>
                                <!--/.input-field-->
                            </div>
                            <!--/.col-->
                            <div class="col col-xs-12">
                                <button type="submit" class="btn btn-dark">Submit</button>
                            </div>
                            <!--/.col-->
                            <div class="col col-xs-12">
                                <div id="loading"> Sending your message....</div>
                                <div id="successmsg">Your message has been sent.</div>
                                <div id="errormsg">Something went wrong, please try again.</div>
                            </div>
                            <!--/.col-->
                        </div>
                        <!--/.row-->
                    </form>
                    <!--/#contactform-->
                </div>
                <!--/.contact-box-->
            </div>
            <!--/.col-->
            <div class="col col-md-6 matchheightbox">
                <div class="map-section">
                    <div class="map-canvas" id="contact-map"
                        data-content="<h4>David Smith</h4><address>PO Box 16122 Collins West, Amsterdam, Netherlands.</address>">
                    </div>
                </div>
                <!--/.map-section-->
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->
    </div> --}}
    <!--/.contact-section-->
    <!--contact section end-->
</div>
@endsection