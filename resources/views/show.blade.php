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
        <p>{{ $test->content }}</p>
        <!-- <p>{{ $test->name}}</p> -->
        <p>
            <a href={{ route('test.list') }}>一覧に戻る</a> 
        </p>
    </body>
</html>
