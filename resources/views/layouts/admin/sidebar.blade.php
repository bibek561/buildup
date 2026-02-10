<aside class="layout-menu menu-vertical menu bg-menu-theme" id="layout-menu">
    <div class="app-brand demo p-0">
        <a class="app-brand-link mx-auto my-0" href="{{ route('dashboard') }}" target="_blank">
            {{-- @if ($setting['site_main_logo']) --}}
            <img style="max-width: 210px;" src="{{ asset('admin/assets/images/logo.png') }}" alt="logo">
            {{-- @else --}}
            {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2">ParadiseCourse</span> --}}
            {{-- @endif --}}
        </a>

        <a class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none" href="javascript:void(0);">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <br>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <!-- Dashboard -->
        <li class="menu-item {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('dashboard') }}">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{ Request::segment(1) == 'contacts' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('contacts.index') }}">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Contacts</div>
            </a>
        </li>
        <li class="menu-item {{ Request::segment(2) == 'services' ? 'active open' : '' }}">
            <a class="menu-link text-decoration-none menu-toggle" href="javascript:void(0)">
                <i class="menu-icon tf-icons bx bx-star"></i>
                <div data-i18n="General Setting">Services</div>
            </a>
            <ul class="menu-sub">
                <li
                    class="menu-item {{ Request::segment(2) == 'services' && Request::segment(3) == null ? 'active' : '' }}">
                    <a class="menu-link text-decoration-none" href="{{ route('services.index') }}">
                        <div data-i18n="Accordion">All Services</div>
                    </a>
                </li>
                <li
                    class="menu-item {{ Request::segment(2) == 'services' && Request::segment(3) == 'create' ? 'active' : '' }}">
                    <a class="menu-link text-decoration-none" href="{{ route('services.create') }}">
                        <div data-i18n="Accordion">Create Services</div>
                    </a>
                </li>
            </ul>
        <li class="menu-item {{ Request::segment(2) == 'services' ? 'active open' : '' }}">
            <a class="menu-link text-decoration-none menu-toggle" href="javascript:void(0)">
                <i class="menu-icon tf-icons bx bx-star"></i>
                <div data-i18n="General Setting">Project</div>
            </a>
            <ul class="menu-sub">
                <li
                    class="menu-item {{ Request::segment(2) == 'services' && Request::segment(3) == null ? 'active' : '' }}">
                    <a class="menu-link text-decoration-none" href="{{ route('project.index') }}">
                        <div data-i18n="Accordion">All Project</div>
                    </a>
                </li>
                <li
                    class="menu-item {{ Request::segment(2) == 'services' && Request::segment(3) == 'create' ? 'active' : '' }}">
                    <a class="menu-link text-decoration-none" href="{{ route('project.create') }}">
                        <div data-i18n="Accordion">Create Project</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item {{ Request::segment(2) == 'blog' ? 'active open' : '' }}">
            <a class="menu-link text-decoration-none menu-toggle" href="javascript:void(0)">
                <i class="menu-icon tf-icons bx bx-news"></i>
                <div data-i18n="General Setting">Blogs</div>
            </a>
            <ul class="menu-sub">
                <li
                    class="menu-item {{ Request::segment(2) == 'blog' && Request::segment(3) == null ? 'active' : '' }}">
                    <a class="menu-link text-decoration-none" href="{{ route('blog.index') }}">
                        <div data-i18n="Accordion">All Blog</div>
                    </a>
                </li>
                <li
                    class="menu-item {{ Request::segment(2) == 'blog' && Request::segment(3) == 'create' ? 'active' : '' }}">
                    <a class="menu-link text-decoration-none" href="{{ route('blog.create') }}">
                        <div data-i18n="Accordion">Create Blog</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item {{ Request::segment(2) == 'faq' ? 'active open' : '' }}">
            <a class="menu-link text-decoration-none" id="slider-link" href="{{ route('faq.index') }}">
                <i class="menu-icon tf-icons bx bx-question-mark"></i>
                <div data-i18n="General Setting">Faq</div>
            </a>
        </li>
        <li class="menu-item {{ Request::segment(2) == 'team' ? 'active open' : '' }}">
            <a class="menu-link text-decoration-none" id="slider-link" href="{{ route('team.index') }}">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="General Setting">Team</div>
            </a>
        </li>
        <li class="menu-item {{ Request::segment(2) == 'review' ? 'active open' : '' }}">
            <a class="menu-link text-decoration-none" id="slider-link" href="{{ route('review.index') }}">
                <i class="menu-icon tf-icons bx bxs-quote-alt-left"></i>
                <div data-i18n="General Setting">Testimonials</div>
            </a>
        </li>
    </ul>

    </ul>
</aside>

<style>
    .menu-vertical .menu-item .menu-link {
        font-size: 16px;
        background-color: rgba(237, 240, 240, 0.233)
    }
</style>
