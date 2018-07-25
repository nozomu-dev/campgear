@extends('layouts.app')
@section('content')

    <div class="container">
        @include('elements.title', ['title' => 'ユーザーグループの新規追加'])

        <form method='post' action="/user_groups/">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="user_group_name">保管場所名</label>
                <input type="text" class="form-control" id="user_group_name" name="user_group_name">
            </div>

            <button class="btn btn-primary" type="submit">保管場所を新規追加</button>
        </form>
    </div>
@endsection
