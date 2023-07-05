<!--testimonials section start-->
<div class="section testimonials-section overflowhidden animated-row">
    <div class="container">
        <div class="title-block row text-center">
            <div class="col col-md-6 col-md-push-3">
                <div class="section-title">
                    <em class="font-weight-600">What my clients say</em>
                    <h2>Testimonial</h2>
                    <span class="hexagon-icon"><i></i></span>
                </div>
                <!--/.section-title-->
            </div>
            <!--/.col-->
        </div>
        <!--/.title-block-->
        <div class="testimonials-slider has-controls fullwidth-slider">
            @foreach ($testimonials as $testimonial)
            <div class="item">
                <div class="testimonial-col">
                    <div class="testimonial-box border text-lg m-b-20">
                        <div class="client-imgbox">
                            <figure><img src="{{ asset('frontend') }}/images/client-01.png" alt="" /></figure>
                        </div>
                        <p><sup><i class="fa fa-quote-left text-primary"></i></sup>{{ $testimonial->quote }}<sub><i
                                    class="fa fa-quote-right text-primary"></i></sub></p>
                    </div>
                    <!--/.testimonial-box-->
                    <div class="client-details">
                        <strong class="client-name font-secondary">{{ $testimonial->client }}</strong>
                        <em class="title-style-02 client-designation text-lightgray"><strong>{{
                                $testimonial->designation }},</strong>
                            {{ $testimonial->company }}</em>
                    </div>
                    <!--/.client-details-->
                </div>
                <!--/.testimonial-col-->
            </div>
            @endforeach
            <!--/.item-->
        </div>
        <!--/.testimonials-slider-->
    </div>
    <!--/.container-->
</div>
<!--/.section-->
<!--testimonials section end-->
