@include('article.elements.head')
@include('article.elements.title',  ['title' => '削除完了'])

    <div class="alert alert-primary">
        削除しました。
        <a href="/articles" class="btn btn-primary">一覧に戻る</a>
    </div>

@include('article.elements.foot')
