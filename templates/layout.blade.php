<!doctype html>
<html lang="en">
<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <!-- TITLE -->
    <title>
        @yield('title', (f('controller.name') . f('controller.method') ? f('controller.name') . ' ' . f('controller.method', true) : 'Bono'))
    </title>

    <!-- FAVICON -->
    @section('favicon')
        <!-- You can override this section via @overide blade method -->
        <link type="image/x-icon" href="{{ Theme::base('vendor/blade-foundation/img/favicon.ico') }}" rel="Shortcut icon" />
    @show

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ Theme::base('vendor/blade-foundation/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ Theme::base('vendor/blade-foundation/css/foundation.css') }}">
    <link rel="stylesheet" href="{{ Theme::base('vendor/blade-foundation/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ Theme::base('vendor/blade-foundation/css/main.css') }}">
    <link rel="stylesheet" href="{{ Theme::base('vendor/blade-foundation/css/style.css') }}">

    <!-- PAGE LEVEL STYLING -->
    @yield('styler')

    <!-- HEAD SCRIPT -->
    <script type="text/javascript" charset="utf-8" src="{{ Theme::base('vendor/blade-foundation/js/modernizr.js') }}"></script>
    <script type="text/javascript" charset="utf-8" src="{{ Theme::base('vendor/blade-foundation/js/jquery.js') }}"></script>

    <!-- ADDITIONAL HEAD SCRIPT -->
    @yield('head')
</head>

<body>
    <!-- NAVBAR -->
    @section('navbar')
    @include('components.navbar')
    @show

    <!-- NOTIFICATION -->
    {{ f('notification.show') }}

    <!-- PAGE CONTENT -->
    @yield('content')

    <!-- MAIN SCRIPT -->
    <script type="text/javascript" charset="utf-8" src="{{ Theme::base('vendor/blade-foundation/js/fastclick.js') }}"></script>
    <script type="text/javascript" charset="utf-8" src="{{ Theme::base('vendor/blade-foundation/js/foundation.min.js') }}"></script>
    <script type="text/javascript" charset="utf-8" src="{{ Theme::base('vendor/blade-foundation/js/plugins.js') }}"></script>
    <script type="text/javascript" charset="utf-8">
        var URL_SITE = window.URL_SITE = '{{ URL::site() }}',
            URL_BASE = window.URL_BASE = '{{ URL::base() }}';
    </script>

    <!-- PAGE LEVEL SCRIPT -->
    @yield('injector')
</body>
</html>
