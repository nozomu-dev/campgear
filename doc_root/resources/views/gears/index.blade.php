@extends('layouts.app')
@section('content')

    <div class="container">
        @include('elements.title', ['title' => '商品一覧'])
        <p><a href="/gears/create" class="btn btn-primary">新規追加</a></p>

        @foreach ($gears as $gear)
        <div class="card mb-2">
            <div class="card-body">
                <h4 class="card-title"><a href="/gears/{{ $gear->gear_id }}/edit">{{ $gear->gear_name }}</a></h4>
                <h6 class="card-subtitle mb-2 text-muted">{{ $gear->updated_at }}</h6>
                <p class="card-text">{{ $gear->gear_description }}</p>
                <ul>
                    <li>商品カテゴリ： {{ $gear->gear_category_id }} / {{ $gear->gear_category_name }}</li>
                    <li>所有者：{{ $gear->name }}</li>
                    <li>保管場所：{{ $gear->repository_name }} / {{ $gear->repository_address }}</li>
                </ul>
            </div>
        </div>
        @endforeach
    </div>

@endsection
