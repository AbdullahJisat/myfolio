<!--home slider start-->
<div id="home">
    <div class="banner-section section-dark">
        <div class="main-slider owl-carousel">
            <div class="item">
                <div class="slide-img bg-cover"
                    style="background-image: url({{ asset('frontend') }}/images/slide-01.jpg);"></div>
                <div class="slider-contentbox v-middle text-lg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-sm-6 col-lg-5">
                                <div class="slider-content animate-me">
                                    <h2>I am {{ $user->name }}</h2>
                                    <h3 style="color: white;">{{ $user->designation }}</h3>
                                    <p>{{ $user->short_bio }}</p>
                                    <div class="btn-row"><a href="#" class="btn" data-toggle="modal" data-target="#hireme"><i class="glyphicon glyphicon-user"></i> Hire me <span><i class="fa fa-chevron-right"></i></span></a></div>
                                </div>
                                <!--/.slider-content-->
                            </div>
                        </div>
                    </div>
                    <!--/.container-->
                </div>
                <!--/.slider-contentbox-->
            </div>
            <div class="item">
                <div class="slide-img bg-cover"
                    style="background-image: url({{ asset('frontend') }}/images/slide-02.jpg);"></div>
                <div class="slider-contentbox v-middle text-lg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-sm-6 col-lg-5">
                                <div class="slider-content animate-me">
                                    <h2>I am {{ $user->name }}</h2>
                                    <h3 style="color: white;">{{ $user->designation }}</h3>
                                    <p>{{ $user->short_bio }}</p>
                                    <div class="btn-row"><a href="#" class="btn" data-toggle="modal" data-target="#hireme">Hire me <span><i class="fa fa-chevron-right"></i></span></a></div>
                                </div>
                                <!--/.slider-content-->
                            </div>
                        </div>
                    </div>
                    <!--/.container-->
                </div>
                <!--/.slider-contentbox-->
            </div>
            <!--/.item-->
            <div class="item">
                <div class="slide-img bg-cover"
                    style="background-image: url({{ asset('frontend') }}/images/slide-03.jpg);"></div>
                <div class="slider-contentbox v-middle text-lg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-sm-6 col-lg-5">
                                <div class="slider-content animate-me">
                                    <h2>I am {{ $user->designation }}</h2>
                                    <p>{{ $user->short_bio }}</p>
                                    <div class="btn-row"><a href="#" class="btn">Hire me <span><i
                                                    class="fa fa-chevron-right"></i></span></a></div>
                                </div>
                                <!--/.slider-content-->
                            </div>
                        </div>
                    </div>
                    <!--/.container-->
                </div>
                <!--/.slider-contentbox-->
            </div>
            <!--/.item-->
        </div>
        <!--/.main-slider-->
        <a href="#" class="scroll-down"><img src="{{ asset('frontend') }}/images/mouse.svg" alt=""> Scroll down</a>
    </div>
    <!--/.banner-section-->
</div>
<!--/#home-->
<!--home slider end-->
