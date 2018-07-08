@extends('layouts.app')
@section('content')

    <div class="container">
        @include('elements.title', ['title' => '保管場所'])

        <form method='post' action="/repositories/{{$repository->repository_id}}">
            {{ method_field('PUT') }}
            {{ csrf_field() }}

            <input type="hidden" name="id" value='{{ $repository->repository_id }}'>

            <div class="form-group">
                <label for="repository_name">保管場所名</label>
                <input type="text" class="form-control" id="repository_name" name="repository_name" value="{{$repository->repository_name}}">
            </div>

            <div class="form-group">
                <label for="repository_address">住所</label>
                <input type="text" class="form-control" id="repository_address" name="repository_address" value="{{$repository->repository_address}}">
            </div>
            <div class="text-right">
                <button class="btn btn-primary" type="submit">保存</button>
            </div>
        </form>

        <form action="/repositories/{{ $repository->repository_id }}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <div class="text-right mt-3">
                <button class="btn btn-danger" type="submit">削除</button>
            </div>
        </form>
    </div>
@endsection
