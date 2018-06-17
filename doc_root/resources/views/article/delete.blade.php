@extends('layouts.app')
@section('content')

    <div class="container">
        @include('article.elements.title',  ['title' => '削除完了'])
        <div class="alert alert-primary">
            削除しました。
            <a href="/articles" class="btn btn-primary">一覧に戻る</a>
        </div>
    </div>

@endsection
