@include('article.elements.head')
@include('article.elements.title',  ['title' => '修正完了'])

    <div class="alert alert-primary">
        修正しました。
        <a href="/articles" class="btn btn-primary">一覧に戻る</a>
    </div>

@include('article.elements.foot')
