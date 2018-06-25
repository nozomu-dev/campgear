@extends('layouts.app')
@section('content')

    <div class="container">
        @include('elements.title',  ['title' => '「' . $gear[0]->gear_name . '」の詳細'])

        <form method='post' action="/articles/delete">
            {{ csrf_field() }}
            <input type="hidden" name="id" value='{{ $gear[0]->gear_id }}'>
            <div class="form-group">
                <b>ギア名：</b> {{ $gear[0]->gear_name }}
            </div>

            <div class="form-group">
                <b>カテゴリー：</b> {{ $gear[0]->gear_category_name }} ( {{ $gear[0]->gear_category_id }} )
            </div>

            <div class="form-group">
                <b>所有ユーザー：</b> {{ $gear[0]->name }} ( {{ $gear[0]->owning_user_id }} )
            </div>

            <div class="form-group">
                <b>保管場所：</b> {{ $gear[0]->repository_address }} ( {{ $gear[0]->repository_name }} )
            </div>

            <div class="form-group">
                <b>説明文：</b> {{ $gear[0]->gear_description }}
            </div>
            <button class="btn btn-danger" type="submit">削除</button>
        </form>
    </div>

@endsection
