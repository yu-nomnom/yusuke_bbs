@extends('layout')

@section('content')
<h1>yusuke bbs</h1>
    <p>{{ $message }}</p>
    {{ Form::open( ['action' => 'TestController@store', 'method' => 'post'] )}}
    {{ csrf_field() }}
        <div class='form-group'>
            <label for="title">タイトル：</label>
            <input name="title" type="text" placeholder="タイトルを入力">
        </div>
        <div class='form-group'>
            <label for="content">内容：</label>
            <input name="content" type="text" placeholder="ふざけろ‼︎">
        <div class='form-group'>
            <label for="name">名前：</label>
            <textarea name="notes" cols="50" rows="10"></textarea>
            <!-- <input name="name" type="text" placeholder="君の名は。"> -->
        </div>
        <div class="form-group">
            {{ Form::submit('作成する', ['class' => 'btn btn-primary']) }}
            <a href= '{{ route("test.list") }}'>一覧に戻る</a>
        </div>
    {{ Form::close() }}

@endsection