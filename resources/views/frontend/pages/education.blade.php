<div class="col col-md-6 bg-gray matchheightbox">
    <div class="p-50">
        <h3 class="title-style">Education</h3>
        <div class="experience-list">
            @foreach ($educations as $education)
            <div class="experience-row clearfix m-b-30 animate" data-animate="fadeIn">
                <div class="experience-col-left m-r-20 p-r-20">
                    <figure><img src="{{ asset('frontend') }}/images/education-logo.png" alt="" /></figure>
                    <div class="experience-details overflowhidden font-secondary">
                        <span class="text-white">{{ $education->institute }}</span>
                        <strong class="text-uppercase text-primary">{{ $education->degree }}</strong>
                        <em class="years-duration font-primary">{{ $education->start_date . ' - ' .
                            $education->end_date }}</em>
                    </div>
                    <!--/.experience-details-->
                </div>
                <!--/.experience-col-->
                {{-- <p class="overflowhidden m-0">{{ $education->description }}</p> --}}
            </div>
            <!--/.experience-row-->
            @endforeach
        </div>
        <!--/.experience-list-->
    </div>
</div>
<!--/.col-->
