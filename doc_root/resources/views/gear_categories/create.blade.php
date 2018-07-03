@extends('layouts.app')
@section('content')

    <div class="container">
        @include('elements.title', ['title' => '商品カテゴリーの新規追加'])

        <form method='post' action="/gear_categories/">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="inputGearCategoryName">商品カテゴリー名</label>
                <input type="text" class="form-control" id="inputGearCategoryName" name="gear_category_name">
            </div>

            <button class="btn btn-primary" type="submit">商品を新規追加</button>
        </form>
    </div>
@endsection
