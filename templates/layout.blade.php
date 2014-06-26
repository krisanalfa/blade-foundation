<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        @yield('title', (f('controller.name') . f('controller.method') ? f('controller.name') . ' ' . f('controller.method', true) : 'Bono'))
    </title>

    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <link type="image/x-icon" href="{{ Theme::base('vendor/img/favicon.ico') }}" rel="Shortcut icon" />

    <link rel="stylesheet" href="{{ Theme::base('vendor/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ Theme::base('vendor/css/foundation.css') }}">
    <link rel="stylesheet" href="{{ Theme::base('vendor/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ Theme::base('vendor/css/style.css') }}">

    <script type="text/javascript" charset="utf-8" src="{{ Theme::base('vendor/js/modernizr.js') }}"></script>

    <!-- PAGE LEVEL STYLING -->
    @yield('styler')
</head>

<body>
    {{ f('notification.show') }}

    <!-- NAVBAR -->
    @include('components.navbar')

    <!-- PAGE CONTENT -->
    @yield('content')

    <script type="text/javascript" charset="utf-8" src="{{ Theme::base('vendor/js/jquery.js') }}"></script>
    <script type="text/javascript" charset="utf-8" src="{{ Theme::base('vendor/js/fastclick.js') }}"></script>
    <script type="text/javascript" charset="utf-8" src="{{ Theme::base('vendor/js/foundation.js') }}"></script>
    <script type="text/javascript" charset="utf-8" src="{{ Theme::base('vendor/js/plugins.js') }}"></script>
    <script type="text/javascript" charset="utf-8">
    $(function(){
        var URL_SITE = window.URL_SITE = '{{ URL::site() }}',
            URL_BASE = window.URL_BASE = '{{ URL::base() }}';
    });
    </script>

    <!-- PAGE LEVEL SCRIPT -->
    @yield('injector')
</body>
</html>
