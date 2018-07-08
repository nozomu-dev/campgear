@extends('layouts.app')
@section('content')

    <div class="container">
        @include('elements.title', ['title' => '保管場所一覧'])
        <p><a href="/repositories/create" class="btn btn-primary">新規追加</a></p>

        @foreach ($repositories as $repository)
        <div class="card mb-2">
            <div class="card-body">
                <h4 class="card-title">
                    <a href="/repositories/{{ $repository->repository_id }}/edit">{{ $repository->repository_name }}</a>
                </h4>
                <p class="card-text">{{ $repository->repository_address }}</p>
            </div>
        </div>
        @endforeach
    </div>

@endsection
