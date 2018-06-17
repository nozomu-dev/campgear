@extends('layouts.app')
@section('content')

    <div class="container">
        @include('article.elements.title',  ['title' => '「' . $article->title . '」の修正'])

        <form method='post' action="/articles/edit">
            {{ csrf_field() }}
            <input type="hidden" name="id" value='{{ $article->id }}'>
            <div class="form-group">
                <label for="titleInput">タイトル</label>
                <input type="text" class="form-control" id="titleInput" name="title" value='{{ $article->title }}'>
            </div>
            <div class="form-group">
                <label for="bodyInput">ボディ</label>
                <textarea type="text" class="form-control" id="bodyInput" name="body">{{ $article->body }}</textarea>
            </div>
            <button class="btn btn-primary" type="submit">修正</button>
        </form>
    </div>

@endsection
