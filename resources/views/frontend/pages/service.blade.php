<!--services section start-->
<div id="services" class="section services-section bg-gray border-top-bottom animated-row">
    <div class="container container-small">
        <div class="title-block row text-center">
            <div class="col col-md-6 col-md-push-3">
                <div class="section-title">
                    <em class="font-weight-600">What i can do</em>
                    <h2>Services</h2>
                    <span class="hexagon-icon"><i></i></span>
                </div>
                <!--/.section-title-->
            </div>
        </div>
        <!--/.title-block-->
        <div class="service-list">
            <div class="row no-spacing-row">
                @foreach ($services as $service)
                <div class="col col-sm-6 col-md-4">
                    <div class="servicebox animate matchheightbox" data-animate="fadeIn">
                        <span class="service-icon"><i class="{{ $service->icon }}"></i></span>
                        <div class="service-content">
                            <h3>{{ $service->title }}</h3>
                            <p>{{ $service->description }}</p>
                        </div>
                        <!--/.service-content-->
                    </div>
                    <!--/.servicebox-->
                </div>
                @endforeach
            </div>
            <!--/.row-->
        </div>
        <!--/.service-list-->
    </div>
    <!--/.container-->
</div>
<!--/.section-->
<!--services section end-->
