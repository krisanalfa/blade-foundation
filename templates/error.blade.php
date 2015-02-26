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
        Error
    </title>

    <!-- FAVICON -->
    @section('favicon')
        <!-- You can override this section via @overide blade method -->
        <link type="image/x-icon" href="{{ Bono\Helper\URL::base('vendor/blade-foundation/img/favicon.ico') }}" rel="Shortcut icon" />
    @show

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ Bono\Helper\URL::base('vendor/blade-foundation/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ Bono\Helper\URL::base('vendor/blade-foundation/css/foundation.css') }}">
    <link rel="stylesheet" href="{{ Bono\Helper\URL::base('vendor/blade-foundation/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ Bono\Helper\URL::base('vendor/blade-foundation/css/main.css') }}">
    <link rel="stylesheet" href="{{ Bono\Helper\URL::base('vendor/blade-foundation/css/style.css') }}">

    <!-- PAGE LEVEL STYLING -->
    @yield('styler')

    <!-- HEAD SCRIPT -->
    <script type="text/javascript" charset="utf-8" src="{{ Bono\Helper\URL::base('vendor/blade-foundation/js/modernizr.js') }}"></script>
    <script type="text/javascript" charset="utf-8" src="{{ Bono\Helper\URL::base('vendor/blade-foundation/js/jquery.js') }}"></script>

    <!-- ADDITIONAL HEAD SCRIPT -->
    @yield('head')
</head>

<body>
    <!-- NAVBAR -->
    @section('navbar')
    @include('components.navbar')
    @show

    <!-- PAGE CONTENT -->
    <div class="row">
        <div class="welcome text-center" style="margin-top: 200px;">
            <h1>Awww snap!</h1>
            <h1>
                <small>[e::{{ $error->getCode() ?: 'null' }}] Something bad happened, contact your system administrator or the developer to make it works again.</small>
            </h1>
        </div>
    </div>

    <!-- MAIN SCRIPT -->
    <script type="text/javascript" charset="utf-8" src="{{ Bono\Helper\URL::base('vendor/blade-foundation/js/fastclick.js') }}"></script>
    <script type="text/javascript" charset="utf-8" src="{{ Bono\Helper\URL::base('vendor/blade-foundation/js/foundation.min.js') }}"></script>
    <script type="text/javascript" charset="utf-8" src="{{ Bono\Helper\URL::base('vendor/blade-foundation/js/plugins.js') }}"></script>
    <script type="text/javascript" charset="utf-8">
        var URL_SITE = window.URL_SITE = '{{ Bono\Helper\URL::site() }}',
            URL_BASE = window.URL_BASE = '{{ Bono\Helper\URL::base() }}';
    </script>

    <!-- PAGE LEVEL SCRIPT -->
    @yield('injector')
</body>
</html>
