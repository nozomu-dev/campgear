@extends('layouts.app')
@section('content')

    <div class="container">
        @include('elements.title', ['title' => 'ギアの新規追加'])

        <form method='post' action="/gears/">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="inputGearName">ギア名</label>
                <input type="text" class="form-control" id="inputGearName" name="gear_name">
            </div>

            <div class="form-group">
                <label for="inputGearCategoryId">ギアカテゴリー</label>
                <input type="number" class="form-control" id="inputGearCategoryId" name="gear_category_id">
            </div>

            <div class="form-group">
                <label for="inputOwningUserId">所有ユーザー</label>
                <input type="number" class="form-control" id="inputOwningUserId" name="owning_user_id">
            </div>

            <div class="form-group">
                <label for="inputRepositoryId">保管場所</label>
                <input type="number" class="form-control" id="inputRepositoryId" name="repository_id">
            </div>

            <div class="form-group">
                <label for="inutGearDescription">説明文</label>
                <input type="text" class="form-control" id="inutGearDescription" name="gear_description">
            </div>

            <button class="btn btn-primary" type="submit">ギアを新規追加</button>
        </form>
    </div>
@endsection
