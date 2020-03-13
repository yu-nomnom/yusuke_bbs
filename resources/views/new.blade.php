@extends('layout')

@section('content')
<h1>yusuke bbs</h1>
    <p>{{ $message }}</p>
    {{ Form::open(['action' => 'TestController@store']) }}
    {{ csrf_field() }}
        <div class='form-group'>
            {{ Form::label('title', 'title:') }}
            {{ Form::text('title', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('content', 'Content:') }}
            {{ Form::input('content', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name', null) }}
        </div>
        <div class="form-group">
            {{ Form::submit('作成する', ['class' => 'btn btn-primary']) }}
            <a href="/tests">一覧に戻る</a>
        </div>
    {{ Form::close() }}

@endsection