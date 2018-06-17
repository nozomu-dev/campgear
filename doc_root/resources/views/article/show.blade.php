@extends('layouts.app')
@section('content')

    <div class="container">
        @include('article.elements.title',  ['title' => '「' . $article->title . '」の削除'])

        <form method='post' action="/articles/delete">
            {{ csrf_field() }}
            <input type="hidden" name="id" value='{{ $article->id }}'>
            <div class="form-group">
                <label for="titleInput">タイトル</label>
                <input type="text" readonly class="form-control" id="titleInput" name="title" value='{{ $article->title }}'>
            </div>
            <div class="form-group">
                <label for="bodyInput">ボディ</label>
                <textarea type="text" readonly class="form-control" id="bodyInput" name="body">{{ $article->body }}</textarea>
            </div>
            <button class="btn btn-danger" type="submit">削除</button>
        </form>
    </div>

@endsection
