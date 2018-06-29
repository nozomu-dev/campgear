@extends('layouts.app')
@section('content')

    <div class="container">
        @include('elements.title', ['title' => '商品の新規追加'])

        <form method='post' action="/gears/">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="inputGearName">商品名</label>
                <input type="text" class="form-control" id="inputGearName" name="gear_name">
            </div>

            <div class="form-group">
                <label for="inputGearCategoryId">商品カテゴリー</label>
                <select name="gear_category_id" id="inputGearCategoryId" class="form-control">
                    @foreach ($gear_categories as $gear_category)
                    <option value="{{ $gear_category->gear_category_id }}">{{ $gear_category->gear_category_name }}</option>
                    @endforeach
                </select>
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

            <button class="btn btn-primary" type="submit">商品を新規追加</button>
        </form>
    </div>
@endsection
