<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>yusuke bbs</title>
        <style>body {padding: 10px;}</style>
    </head>
    <body>
        <h1>yusuke bbs</h1>
        <p>{{ $message }}</p>
        @foreach ($tests as $test)
            <p>{{ $test->content }}</p>
        @endforeach
    </body>
</html>