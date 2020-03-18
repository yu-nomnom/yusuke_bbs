@extends('layout')

@section('content') 
    <body>
        <h1>yusuke bbs</h1>
        <p>{{ $message }}</p>
        <table class='table table-striped table-hover'>
            @foreach ($tests as $test)
                <tr>
                    <td>
                        <a href='{{ route("test.show", ["id" =>  $test->id]) }}'>
                            {{ $test->title }}
                        </a>
                    </td>
                    <td>{{ $test->name }}</td>
                </tr>
            @endforeach
        </table>

        <div>
            <a href='{{ route("test.new")}}' class='btn btn-outline-primary'>新規投稿</a>
        </div>
    </body>
@endsection