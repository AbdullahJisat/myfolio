<!--header start-->
<header id="header">
    <nav class="navbar m-0" style="background-color: black">
        <div class="container-fluid navigation-menu">
            <div class="row">
                <div class="col-sm-2 col-xs-7 navbar-header">
                    <span class="logobox">
                        <a id="logo" href="index-2.html"><img src="{{ asset('settings') }}/logo.png" alt="" /></a>
                    </span>
                    <!--/.logobox-->
                </div>
                <div class="navigation-row col-sm-10 col-xs-5">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#mainmenu"><span class="menulines"></span></button>
                    <nav class="collapse navbar-collapse pull-right" id="mainmenu">
                        <ul class="nav navbar-nav scrollnav">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#skills">Skills</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#pricing">Pricing</a></li>
                            {{-- <li>
                                <a href="#blog">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-detail.html">Blog detail</a></li>
                                    <li><a href="elements.html">Elements</a></li>
                                </ul>
                            </li>
                            <li><a href="#contact">Contact</a></li> --}}
                            <li class="hire-btn header-btn">
                                @if (Route::has('login'))
                                @auth
                                <a href="{{ url('dashboard') }}"><i class="glyphicon glyphicon-home"></i></a>
                                @else
                                <a href="{{ route('login') }}"><i class="glyphicon glyphicon-user"></i></a>
                                @endauth
                                @endif
                            </li>
                        </ul>
                    </nav>
                    <!--/#mainmenu-->
                </div>
            </div>
        </div>
    </nav>
</header>
<!--/#header-->
<!--header end-->