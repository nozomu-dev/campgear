@extends('layouts.app')
@section('content')

    <div class="container">
        @include('elements.title',  ['title' => $message])

        <div class="alert alert-primary">
            {{$message}}
            <a href="/gears" class="btn btn-primary">一覧に戻る</a>
        </div>
    </div>

@endsection
