@extends('layouts.app')
@section('content')

    <div class="container">
        @include('elements.title',  ['title' => '「' . $gear[0]->gear_name . '」の詳細'])

        <form method='post' action="/articles/delete">
            {{ csrf_field() }}
            <input type="hidden" name="id" value='{{ $gear[0]->gear_id }}'>
            <div class="form-group">
                <label for="#gear_name">商品名</label>
                <input name="gear_name" id="gear_name"  type="text" value="{{ $gear[0]->gear_name }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="#gear_category_id">商品カテゴリー</label>
                <select name="gear_category_id" id="gear_category_id" class="form-control">
                    @foreach ($gear_categories as $gear_category)
                        <option value="{{ $gear_category->gear_category_id }}" @if( $gear_category->gear_category_id == $gear[0]->gear_category_id ) selected @endif>
                            {{ $gear_category->gear_category_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="#owning_user_id">所有ユーザー</label>
                <select name="owning_user_id" id="owning_user_id" class="form-control">
                    @foreach ($users as $user)
                        <option value="{{$user->id}}" @if( $user->id == $gear[0]->owning_user_id ) selected @endif>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="#repository_id">保管場所</label>
                <select name="repository_id" id="repository_id" class="form-control">
                    @foreach ($repositories as $repository)
                        <option value="{{ $repository->repository_id }}" @if( $repository->repository_id == $gear[0]->repository_id ) selected @endif>
                            {{ $repository->repository_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="#gear_description">説明文</label>
                <textarea name="gear_description" id="#gear_description" cols="30" rows="10" class="form-control">{{ $gear[0]->gear_description }}</textarea>
            </div>

            <div class="text-right">
                <button class="btn btn-danger" type="submit">変更を保存</button>
                <button class="btn btn-default mr-3" type="submit">編集</button>
            </div>

        </form>
    </div>

@endsection
