@extends('layout')

@section('content')
    <body>
        <h1>yusuke bbs</h1>
        <p>{{ $message }}</p>
        <p>{{ $test->title }}</p>
        <p>{{ $test->content }}</p>
        <!-- <p>{{ $test->name}}</p> -->
        <p>
            <a href="/tests"　class='btn btn-outline-primary'>一覧に戻る</a> 
        </p>
        <div>
            {{ Form::open(['method' => 'delete', 'route' => ['test.delete', $test->id]]) }}
                {{ Form::submit('削除', ['class' => 'btn btn-outline-secondary']) }}
            {{ Form::close() }}
        </div>
    </body>
@endsection
