<!--skills section tart-->
<div id="skills" class="section skills-section animated-row">
    <div class="container container-small">
        <div class="title-block row text-center">
            <div class="col col-md-6 col-md-push-3">
                <div class="section-title">
                    <em class="font-weight-600">What i know</em>
                    <h2>Skills</h2>
                    <span class="hexagon-icon"><i></i></span>
                </div>
                <!--/.section-title-->
            </div>
            <!--/.col-->
        </div>
        <!--/.title-block-->
        @php
        $color = ['red', 'yellow', 'green', 'blue', 'purple']
        @endphp
        <div class="row skills-row">
            @foreach ($skills as $skill)
            <div class="col col-sm-4 col-fifth animate" data-animate="fadeInUp">
                <div class="skill-box">
                    <div class="chart" data-percent="{{ $skill->level }}">
                        <span class="percent {{ $color[array_rand($color)] }}-gradient"></span>
                    </div>
                    <span class="skill">{{ $skill->name }}</span>
                </div>
                <!--/.skill-box-->
            </div>
            @endforeach
            <!--/.col-->
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</div>
<!--/.section-->
<!--skills section end-->
