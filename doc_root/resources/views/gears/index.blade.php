@extends('layouts.app')
@section('content')

    <div class="container">
        @include('elements.title', ['title' => 'ギア一覧'])
        <p><a href="/gears/create" class="btn btn-primary">新規追加</a></p>

        @foreach ($gears as $gear)
        <div class="card mb-2">
            <div class="card-body">
                <h4 class="card-title"><a href="/gears/{{ $gear->gear_id }}">{{ $gear->gear_name }}</a></h4>
                <h6 class="card-subtitle mb-2 text-muted">{{ $gear->updated_at }}</h6>
                <p class="card-text">{{ $gear->gear_description }}</p>
                <ul>
                    <li>ギアカテゴリ：{{ $gear->gear_category_id }}</li>
                    <li>所有者：{{ $gear->owning_user_id }}</li>
                    <li>保管場所：{{ $gear->repository_id }}</li>
                </ul>
                <a href="/gears/edit/{{ $gear->id }}" class="card-link">修正</a>
                <a href="/gears/delete/{{ $gear->id }}" class="card-link text-danger">削除</a>
            </div>
        </div>
        @endforeach
    </div>

@endsection
