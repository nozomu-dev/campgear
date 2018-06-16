@include('article.elements.head')
@include('article.elements.title',  ['title' => '新規追加完了'])

    <div class="alert alert-primary">
        追加しました。
        <a href="/articles" class="btn btn-primary">一覧に戻る</a>
    </div>

@include('article.elements.foot')
