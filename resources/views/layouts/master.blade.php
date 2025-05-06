<!DOCTYPE html>
<html class="no-js" lang="en-US">
    <head>
        <link rel="icon" type="image/x-icon" href="{{asset('images/fav-icon.jpg')}}">
        <title>@yield('title')</title>
        @include('includes.head')
        {{-- @dump(isset($jsonLD)) --}}
        @if(isset($jsonLD))
            <!-- JSON-LD -->
            <script type="application/ld+json">
                {!! json_encode($jsonLD) !!}
            </script>
        @endif
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


        <!-- cdn link for ionicons icon -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>

</html>
