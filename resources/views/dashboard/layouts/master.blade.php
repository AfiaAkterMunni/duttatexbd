<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="{{asset('images/fav-icon.jpg')}}">
    <title>DuttaTex Dashboard - @yield('title')</title>
    @include('dashboard.includes.head')

</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">

        @include('dashboard.includes.sidenavbar')

        <div class="flex flex-col flex-1 w-full">

            @include('dashboard.includes.header')

            @yield('content')

        </div>
    </div>
    @yield('js')

    <!-- <script type="text/javascript" src="{{asset('js/myscript.js')}}"></script> -->

</body>

</html>
