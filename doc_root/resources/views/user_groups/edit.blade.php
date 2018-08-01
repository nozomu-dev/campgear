@extends('layouts.app')
@section('content')

    <div class="container">
        @include('elements.title', ['title' => 'ユーザーグループ'])

        <form method='post' action="/user_groups/{{$user_group->user_group_id}}">
            {{ method_field('PUT') }}
            {{ csrf_field() }}

            <input type="hidden" name="id" value='{{ $user_group->user_group_id }}'>

            <div class="form-group">
                <label for="user_group_name">ユーザーグループ名</label>
                <input type="text" class="form-control" id="user_group_name" name="user_group_name" value="{{$user_group->user_group_name}}">
            </div>

            <div class="text-right">
                <button class="btn btn-primary" type="submit">保存</button>
            </div>
        </form>

        <form action="/user_groups/{{ $user_group->user_group_id }}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <div class="text-right mt-3">
                <button class="btn btn-danger" type="submit">削除</button>
            </div>
        </form>
    </div>
@endsection
