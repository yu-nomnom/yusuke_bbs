@extends('layout')

@section('content') 
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
        <div>
            <a href="/test/new">新規投稿</a>
        </div>
    </body>
@endsection