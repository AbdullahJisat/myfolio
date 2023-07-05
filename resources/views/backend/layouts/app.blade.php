<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $siteName }}</title>
    {{-- <title>{{ config('app.name', $siteName) }}</title> --}}

    @include('backend.partials.links')
</head>

<body>

    <!-- Loader -->
    <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo">
                <img src="{{ asset('settings') }}/logo.png" alt="" />
            </div>
            <div class="loader-progress" id="progress_div">
                <div class="bar" id="bar1"></div>
            </div>
            <div class="percent" id="percent1">0%</div>
            <div class="loading-text">Loading...</div>
        </div>
    </div>

    <!-- Header -->
    @include('backend.partials.header')
    <!-- /Header -->

    <!-- Sidebar -->
    @include('backend.partials.sidebar')
    <!-- /Sidebar -->

    <!-- Page Wrapper -->
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">

                <!-- Page Header -->
                @include('backend.partials.page_header')
                <!-- /Page Header -->

                {{-- @include('backend.partials.content') --}}
                @yield('content')
            </div>
            @include('backend.partials.footer')
        </div>
    </div>
    <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    @include('backend.partials.scripts')

</body>

</html>
