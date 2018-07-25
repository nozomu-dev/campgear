@extends('layouts.app')
@section('content')

    <div class="container">
        @include('elements.title', ['title' => 'ユーザーグループ一覧'])
        <p><a href="/user_groups/create" class="btn btn-primary">新規追加</a></p>

        @foreach ($user_groups as $user_group)
        <div class="card mb-2">
            <div class="card-body">
                <h4 class="card-title">
                    <a href="/user_groups/{{ $user_group->user_group_id }}/edit">{{ $user_group->user_group_name }}</a>
                </h4>
            </div>
        </div>
        @endforeach
    </div>

@endsection
