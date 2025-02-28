<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <title>@yield('title')</title>
    @include('includes.head')

</head>

<body>

    @include('includes.navbar')


    @yield('content')


    @include('includes.footer')


</body>

</html>
