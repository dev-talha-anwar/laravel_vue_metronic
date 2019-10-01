<!DOCTYPE html>
<html>
    <head>
        @include("includes.header")
        <title>
            @yield('title')
        </title>
        @include("includes.headcss")
        @yield("pagecss")
    </head>
    <body>
        @include("includes.headercontent")
        @include("includes.navbar")
        <div id="app">
            @yield('content')
        </div>
        @include('includes.footer')
        @include('includes.footerjs')
        @yield("pagejs")
    </body>
</html>


