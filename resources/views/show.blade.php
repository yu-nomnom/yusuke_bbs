@extends('layout')

@section('content')
    <body>
        <h1>yusuke bbs</h1>
        <p>{{ $message }}</p>
        <p>{{ $test->title }}</p>
        <p>{{ $test->content }}</p>
        <!-- <p>{{ $test->name}}</p> -->
        <p>
            <a href="/tests">一覧に戻る</a> 
        </p>
    </body>
@endsection
