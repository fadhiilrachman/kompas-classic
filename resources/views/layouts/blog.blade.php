<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="KOMPAS Classic">
        <meta name="author" content="Fadhiil Rachman">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="//fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <header class="blog-header py-3">
                <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-4 pt-1">
                        <a class="link-secondary" target="_blank" href="https://github.com/fadhiilrachman/kompas-classic">GitHub</a>
                    </div>
                    <div class="col-4 text-center">
                        <a class="blog-header-logo text-dark" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ route('author.home') }}" class="btn btn-sm btn-outline-secondary">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-sm btn-outline-secondary">Login</a>
                            @endauth
                        @endif
                    </div>
                </div>
            </header>
            <div class="nav-scroller py-1 mb-2">
            </div>
        </div>
        <main class="container">
            @yield('content')
        </main>
        <footer class="blog-footer">
            <p>Created by Fadhiil Rachman</p>
        </footer>
    </body>
</html>
