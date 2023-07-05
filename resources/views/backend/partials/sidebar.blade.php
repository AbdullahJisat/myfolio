<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{ asset('settings') }}/logo.png" alt="" class="dark-logo" />
            <img src="{{ asset('settings') }}/logo.png" alt="" class="light-logo" />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="{{ url('dashboard') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('service.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">Service</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('portfolio.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">Portfolio</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('skill.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">Skill</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('experience.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">Experience</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('education.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">Education</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pricing.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">Pricing</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('testimonial.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">Testimonial</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>