@extends('layouts.app')
@section('content')

    <div class="container">
        @include('elements.title',  ['title' => '商品を追加しました。'])

        <div class="alert alert-primary">
            追加しました。
            <a href="/gears" class="btn btn-primary">一覧に戻る</a>
        </div>
    </div>

@endsection
