<!--pricing section start-->
<div id="pricing" class="section pricing-section animated-row">
    <div class="container">
        <div class="title-block row text-center">
            <div class="col col-md-6 col-md-push-3">
                <div class="section-title">
                    <em class="font-weight-600">What i am taken from Client</em>
                    <h2>My Pricing</h2>
                    <span class="hexagon-icon"><i></i></span>
                </div>
                <!--/.section-title-->
                <p>Lorem ipsum dolor sit amet, consecttetur adipisicing elit, sed do eiusmod t empor
                    incididunt ut labore et dolore magna aliqua. quis nostrud exercitat ion.</p>
            </div>
        </div>
        <!--/.title-block-->
        <div class="row no-spacing-row v-middle-row">
            @foreach ($pricings as $pricing)
            <div class="col col-sm-4">
                <div class="pricing-box text-center font-secondary animate" data-animate="fadeInUp">
                    <div class="pricing-col matchheightbox" data-text="P">
                        <div class="plan-details">
                            <span class="pricing-plan text-black m-b-10">{{ $pricing->package }}</span>
                            <strong class="price text-primary font-weight-800 m-b-20"><sup>$</sup> {{ $pricing->amount
                                }}</strong>
                            <span class="hexagon-icon hexagon-icon-gray m-b-20"><i></i></span>
                            <ul class="list list-style-02 pricing-checklist text-left font-primary">
                                {!! $pricing->service !!}
                            </ul>
                            <!--/.list-style-02-->
                            {{-- <a href="#" class="btn btn-dark m-t-30">Select</a> --}}
                        </div>
                        <!--/.plan-details-->
                    </div>
                    <!--/.pricing-col-->
                </div>
                <!--/.pricing-box-->
            </div>
            <!--/.col-->
            @endforeach
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</div>
<!--/.section-->
<!--pricing section end-->
