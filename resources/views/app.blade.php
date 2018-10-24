<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ isset($title) ? $title . ' - ' : null }}The Silly Framework</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Hieupv">
    <meta name="description" content="The Silly Framework">
    <meta name="keywords" content="nsilly, nodejs, framework, web, api, hieupv, nightfury">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if (isset($canonical))
        <link rel="canonical" href="{{ url($canonical) }}" />
    @endif
    <link href='https://fonts.googleapis.com/css?family=Miriam+Libre:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ mix('/assets/css/laravel.css') }}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
    <link rel="apple-touch-icon" href="/favicon.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
</head>
<body class="@yield('body-class', 'docs') language-php">
    <!-- <div class="laracon-banner">
        <img src="/assets/svg/laracon-logo.svg" alt="">
        nsilly is now available!
        <a href="https://github.com/nsilly/nsilly">Ready!</a>
    </div> -->
    <span class="overlay"></span>

    <nav class="main">
        <a href="/" class="brand nav-block">
            <!-- {!! svg('laravel-logo') !!} -->
            <img src="{{ asset('assets/img/silly-face.png') }}" style="max-width: 25px; margin-right: 10px" alt="logo">
            <span>nsilly</span>
        </a>

        <div class="search nav-block invisible">
            {!! svg('search') !!}
            <input placeholder="search" type="text" v-model="search" id="search-input" v-on:blur="reset" />
        </div>

        <ul class="main-nav" v-if="! search">
            @include('partials.main-nav')
        </ul>

        @if (Request::is('docs*') && isset($currentVersion))
            @include('partials.switcher')
        @endif

        <div class="responsive-sidebar-nav">
            <a href="#" class="toggle-slide menu-link btn">&#9776;</a>
        </div>
    </nav>

    @yield('content')

    <footer class="main">
        <ul>
            @include('partials.main-nav')
        </ul>
        <p>nsilly is a framework built on top of <a href="https://expressjs.com" target="_blank">ExpressJS</a> with the idea from <a href="https://laravel.com" target="_blank">Laravel framework</a></p>
        <p class="less-significant">
            <a href="http://jackmcdade.com">
                Designed by<br>
                {!! svg('jack-mcdade') !!}
            </a>
        </p>
    </footer>

     <script>
        var algolia_app_id      = '{{ Config::get('algolia.connections.main.id', false) }}';
        var algolia_search_key  = '{{ Config::get('algolia.connections.main.search_key', false) }}';
        var version             = '{{ isset($currentVersion) ? $currentVersion : DEFAULT_VERSION }}';
    </script>

    @include('partials.algolia_template')

    <script src="{{ mix('/assets/js/laravel.js') }}"></script>
    <script src="/assets/js/viewport-units-buggyfill.js"></script>
    <script>window.viewportUnitsBuggyfill.init();</script>
</body>
</html>
