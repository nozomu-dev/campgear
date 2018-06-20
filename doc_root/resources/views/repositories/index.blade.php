@extends('layouts.app')
@section('content')

    <div class="container">
        @include('elements.title', ['title' => '保管場所一覧'])
        <p><a href="/repositories/create" class="btn btn-primary">新規追加</a></p>

        @foreach ($repositories as $repository)
        <div class="card mb-2">
            <div class="card-body">
                <h4 class="card-title">{{ $repository->repository_name }}</h4>
                <p class="card-text">{{ $repository->repository_address }}</p>
                <a href="/repositories/edit/{{ $repository->id }}" class="card-link">修正</a>
                <a href="/repositories/delete/{{ $repository->id }}" class="card-link text-danger">削除</a>
            </div>
        </div>
        @endforeach
    </div>

@endsection
