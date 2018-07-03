@extends('layouts.app')
@section('content')

    <div class="container">
        @include('elements.title', ['title' => '商品カテゴリー一覧'])
        <p><a href="/gear_categories/create" class="btn btn-primary">新規追加</a></p>

        @foreach ($gear_categories as $gear_category)
        <div class="card mb-2">
            <div class="card-body">
                <h4 class="card-title mb-0">
                    <span class="smal">{{ $gear_category->gear_category_id }} /</span>
                    <a href="/gear_categories/{{ $gear_category->gear_category_id }}/edit">
                    {{ $gear_category->gear_category_name }}
                    </a>
                </h4>
            </div>
        </div>
        @endforeach
    </div>

@endsection
