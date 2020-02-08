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
            <p>
                <a href="/test/{{$test->id}}">
                    {{ $test->title }}
                </a>
            </p>
        @endforeach
    </body>
</html>
