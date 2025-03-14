<!DOCTYPE html>
<html class="no-js" lang="en-US">
    <head>
        <title>@yield('title')</title>
        @include('includes.head')

    </head>

    <body>

        @include('includes.navbar')

        @isset($seo)
            @if (!empty($seo->h1_text))
                <h1 style='font-size: 0px;line-height: 0px;margin: 0;padding:0'>{{ $seo->h1_text }}</h1>
            @endif
        @endisset

        @yield('content')


        @include('includes.footer')


    </body>

</html>
