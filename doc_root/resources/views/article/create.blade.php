@extends('layouts.app')
@section('content')

    <div class="container">
        @include('article.elements.title', ['title' => '記事の新規追加'])

        <form method='post' action="/articles/create">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="titleInput">タイトル</label>
                <input type="text" class="form-control" id="titleInput" name="title">
            </div>
            <div class="form-group">
                <label for="bodyInput">ボディ</label>
                <textarea type="text" class="form-control" id="bodyInput" name="body"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">新規追加</button>
        </form>
    </div>
@endsection
