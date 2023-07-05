<!--portfolio section tart-->
<div id="portfolio" class="section portfolio-section p-b-0 animated-row">
    <div class="container">
        <div class="title-block row text-center">
            <div class="col col-md-6 col-md-push-3">
                <div class="section-title">
                    <em class="font-weight-600">What i did</em>
                    <h2>Portfolio</h2>
                    <span class="hexagon-icon"><i></i></span>
                </div>
                <!--/.section-title-->
                <p>Lorem ipsum dolor sit amet, consecttetur adipisicing elit, sed do eiusmod t empor
                    incididunt ut labore et dolore magna aliqua. quis nostrud exercitat ion.</p>
            </div>
            <!--/.col-->
        </div>
        <!--/.title-block-->
        <ul class="filters-nav">
            <li class="active"><a href="#" class="btn-filter" data-filter="*">All</a></li>
            @foreach ($categories as $category)
                <li><a href="#" class="btn-filter" data-filter=".filter-{{ $category->id }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
        <!--/.filters-nav-->
        <div class="portfolio-row">
            <div class="portfolio-slider portfolio-gallery owl-carousel has-controls fullwidth-slider">
                @foreach ($portfolios as $key => $portfolio)
                <div class="item filter-{{ $portfolio->category_id }}">
                    <div class="portfolio-box">
                        <div class="portfolio-btn">
                            <a href="#"><i class="fa fa-thumbs-up"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                        <!--/.portfolio-btn-->
                        <a href="{{ asset($portfolio->image) }}" title="{{ $portfolio->title }}" class="portfolio-block">
                            <figure><img src="{{ asset($portfolio->image) }}" alt="" /></figure>
                            <div class="portfolio-overlay">
                                <div class="portfolio-content">
                                    <span class="label">{{ $portfolio->category->name }}</span>
                                    <h3 class="title-style-01">{{ $portfolio->title }}</h3>
                                    <p>{{ $portfolio->description }}</p>
                                </div>
                                <!--/.portfolio-content-->
                            </div>
                            <!--/.portfolio-overlay-->
                        </a>
                        <!--/.portfolio-block-->
                    </div>
                    <!--/.portfolio-box-->
                </div>
                <!--/.item-->
                @endforeach
            </div>
            <!--/.portfolio-slider-->
        </div>
        <!--/.portfolio-row-->
    </div>
    <!--/.container-->
</div>
<!--/.section-->
<!--portfolio section end-->
