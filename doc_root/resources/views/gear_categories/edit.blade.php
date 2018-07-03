@extends('layouts.app')
@section('content')

    <div class="container">
        @include('elements.title',  ['title' => $gear_category->gear_category_name ])

        <form id="gear_form" method='post' action="/gear_categories/{{ $gear_category->gear_category_id }}">
            {{ method_field('PUT') }}
            {{ csrf_field() }}

            <input type="hidden" name="id" value='{{ $gear_category->gear_category_id }}'>

            <div class="form-group">
                <label for="#gear_category_name">商品カテゴリー名</label>
                <input name="gear_category_name" id="gear_category_name"  type="text" value="{{ $gear_category->gear_category_name }}" class="form-control">
            </div>

            <div class="text-right">
                <button class="btn btn-default" type="submit" >変更を保存</button>
            </div>
        </form>
        <form action="/gear_categories/{{ $gear_category->gear_category_id }}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <div class="text-right mt-3">
                <button class="btn btn-danger" type="submit">削除</button>
            </div>
        </form>
    </div>

@endsection
