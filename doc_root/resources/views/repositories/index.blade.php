@extends('layouts.app')
@section('content')

    <div class="container">
        @include('elements.title', ['title' => '保管場所一覧'])
        <p><a href="/repositories/create" class="btn btn-primary">新規追加</a></p>

        @foreach ($repositories as $repository)
        <div class="card mb-2">
            <div class="card-body">
                <h4 class="card-title">
                    <a href="/repositories/{{ $repository->repository_id }}/edit">{{ $repository->repository_name }}</a>
                </h4>
                <p class="card-text">{{ $repository->repository_address }}</p>
            </div>
        </div>
        @endforeach
    </div>



    <!-- **********全然関係ないゲームです********** -->
    <div class="container mt-5 py-5 px-5 bg-dark text-white" style="border-radius: 8px;">
        <h4>talk theme generator</h4>
        <div class="row align-items-center" style="font-size: 80px;">
            <div class="col-md-8" >
                <span id="category" class="d-inline-block mr-5">emotion</span>
                <span id="revel">revel</span>
            </div>
            <div class="col-md-4 text-left">
                <button class="btn btn-primary" onclick="output();">お題を作成</button>
            </div>
        </div>
    </div>

    <script>
        var revels = [0,1,2,3,4,5,6,7,8,9,10];
        var categories = ['Glad', 'Sad', 'Surprise', 'Embarrassed'];

        function updateRevel() {
            var result = revels[Math.floor(Math.random()*revels.length)];
            return result;
        }

        function updateCategory() {
            var result = categories[Math.floor(Math.random()*categories.length)];
            return result;
        }

        function output() {
            var revel = updateRevel();
            document.getElementById('revel').textContent = revel;

            var category = updateCategory();
            document.getElementById('category').textContent = category;
        }

    </script>
    <!-- ********** // 全然関係ないゲームです ********** -->

@endsection
