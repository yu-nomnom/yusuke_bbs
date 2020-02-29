<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>yusuke bbs</title>
        <style>body {padding: 30px;}</style>
        @include('style-sheet')
    </head>
    <body>
        @include('nav')
        <div class='content'>
        @yield('content')
        </div>
    </body>
</html>