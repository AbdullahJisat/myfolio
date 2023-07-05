<div class="col col-md-6 bg-black matchheightbox">
    <div class="p-50">
        <h3 class="title-style">Work Experience</h3>
        <div class="experience-list">
            @foreach ($experiences as $experience)
            <div class="experience-row clearfix m-b-30 animate" data-animate="fadeIn">
                <div class="experience-col-left m-r-20 p-r-20">
                    <figure><img src="{{ asset('frontend') }}/images/envato-logo.png" alt="" /></figure>
                    <div class="experience-details overflowhidden font-secondary">
                        <span class="text-white">{{ $experience->company }}</span>
                        <strong class="text-uppercase text-primary">{{ $experience->designation }}</strong>
                        <em class="years-duration font-primary">{{ $experience->start_date . ' - ' .
                            $experience->end_date }}</em>
                    </div>
                    <!--/.experience-details-->
                </div>
                <!--/.experience-col-->
                <p class="overflowhidden m-0">{{ $experience->description }}</p>
            </div>
            <!--/.experience-row-->
            @endforeach
        </div>
        <!--/.experience-list-->
    </div>
</div>
<!--/.col-->
