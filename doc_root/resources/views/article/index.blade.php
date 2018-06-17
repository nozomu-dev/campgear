@extends('layouts.app')
@section('content')

    <div class="container">
        @include('article.elements.title', ['title' => '記事一覧'])
        <p><a href="/articles/create" class="btn btn-primary">新規追加</a></p>

        @foreach ($articles as $article)
        <div class="card mb-2">
            <div class="card-body">
                <h4 class="card-title">{{ $article->title }}</h4>
                <h6 class="card-subtitle mb-2 text-muted">{{ $article->updated_at }}</h6>
                <p class="card-text">{{ $article->body }}</p>
                <a href="/articles/edit/{{ $article->id }}" class="card-link">修正</a>
                <a href="/articles/delete/{{ $article->id }}" class="card-link text-danger">削除</a>
            </div>
        </div>
        @endforeach
    </div>

@endsection
