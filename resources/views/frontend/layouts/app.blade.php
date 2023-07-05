<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $siteName }}</title>
    {{-- <title>{{ config('app.name', $siteName) }}</title> --}}

    @include('frontend.partials.links')
</head>

<body>
    <div id="wrapper">

        <!-- Loader -->
        <!--preloader start-->
        <div class="preloader-box">
            <div class="preloader loading">
                <span class="slice"></span>
                <span class="slice"></span>
                <span class="slice"></span>
                <span class="slice"></span>
                <span class="slice"></span>
                <span class="slice"></span>
            </div>
            <!--/.preloader-->
        </div>
        <!--/.preloader-box-->
        <!--preloader end-->

        <!-- Header -->
        @include('frontend.partials.header')
        <!-- /Header -->
        <div id="main">
            {{-- @include('frontend.partials.content') --}}
            @yield('content')
        </div>
        <!--/#main-->
        @include('frontend.partials.footer')

        @include('frontend.partials.hire')
    </div>
    <!--/#wrapper-->

    @include('frontend.partials.scripts')

</body>

</html>
