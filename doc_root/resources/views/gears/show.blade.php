@extends('layouts.app')
@section('content')

    <div class="container">
        @include('elements.title',  ['title' => '「' . $gear->gear_name . '」の詳細'])

        <form method='post' action="/articles/delete">
            {{ csrf_field() }}
            <input type="hidden" name="id" value='{{ $gear->gear_id }}'>
            <div class="form-group">
                <label for="inputGearName">ギア名</label>
                <input readonly type="text" class="form-control" id="inputGearName" name="gear_name" value="{{ $gear->gear_name }}">
            </div>

            <div class="form-group">
                <label for="inputGearCategoryId">ギアカテゴリー</label>
                <input readonly type="number" class="form-control" id="inputGearCategoryId" name="gear_category_id" value="{{ $gear->gear_category_id }}">
            </div>

            <div class="form-group">
                <label for="inputOwningUserId">所有ユーザー</label>
                <input readonly type="number" class="form-control" id="inputOwningUserId" name="owning_user_id" value="{{ $gear->owning_user_id }}">
            </div>

            <div class="form-group">
                <label for="inputRepositoryId">保管場所</label>
                <input readonly type="number" class="form-control" id="inputRepositoryId" name="repository_id" value="{{ $gear->repository_id }}">
            </div>

            <div class="form-group">
                <label for="inutGearDescription">説明文</label>
                <input readonly type="text" class="form-control" id="inutGearDescription" name="gear_description" value="{{ $gear->gear_description }}">
            </div>
            <button class="btn btn-danger" type="submit">削除</button>
        </form>
    </div>

@endsection
