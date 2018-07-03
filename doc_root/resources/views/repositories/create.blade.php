@extends('layouts.app')
@section('content')

    <div class="container">
        @include('elements.title', ['title' => '保管場所の新規追加'])

        <form method='post' action="/repositories/">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="repository_name">保管場所名</label>
                <input type="text" class="form-control" id="repository_name" name="repository_name">
            </div>

            <div class="form-group">
                <label for="repository_address">住所</label>
                <input type="text" class="form-control" id="repository_address" name="repository_address">
            </div>

            <button class="btn btn-primary" type="submit">保管場所を新規追加</button>
        </form>
    </div>
@endsection
