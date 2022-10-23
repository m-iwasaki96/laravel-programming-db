<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML/CSS</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css')  }}">
</head>
<body>
    <header>
        <div id="navi">
            <div id="title">
                <h1><a href="{{ route('top') }}">プログラミングDB</a> </h1>
            </div>
            <div id="user">
                <a href="#" id="user-name">ユーザー名</a>
            </div>
        </div>
    </header>

    <main>
        <div id="main-content">
            <aside>
                <a href="{{ route('items.create') }}" class="btn">登録</a>
                <a href="" class="btn">検索</a>
            </aside>
            <section>
                <a href="#"><h2 id="language-title">HTML/CSS</h2></a>
                <div id="main-items">
                    @foreach ($items as $item)
                    <div class="topics">
                        <div class="contents">
                            <p class="topic-title">タイトル</p>
                            <p>{{ $item->title }}</p>
                            <p class="content-body">内容</p>
                            <p>{{ $item->content }}</p>
                            <p class="url">参考URL</p>
                            <p>{{ $item->url }}</p>
                            <div>
                                <a href="{{ route('items.show', $item) }}" class="button">詳細</a>
                                <a href="{{ route('items.edit', $item) }}" class="button">編集</a>
                                <form action="{{ route('items.destroy', $item) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="button">削除</button>
                                </form>
                            </div>
                        </div>
                        <!-- <div class="contents">
                            <p class="topic-title">タイトル</p>
                            <p>ダミーテキスト。</p>
                            <p class="content-body">内容</p>
                            <p>親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。</p>
                            <p class="url">参考URL</p>
                            <p>https://www.ダミーURL.com</p>
                        </div>
                        <div class="contents">
                            <p class="topic-title">タイトル</p>
                            <p>ダミーテキスト。</p>
                            <p class="content-body">内容</p>
                            <p>親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。</p>
                            <p class="url">参考URL</p>
                            <p>https://www.ダミーURL.com</p>
                        </div> -->
                    </div>
                    @endforeach
                    <div class="topics">
                        <div class="contents">
                            <p class="topic-title">タイトル</p>
                            <p>ダミーテキスト。</p>
                            <p class="content-body">内容</p>
                            <p>親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。</p>
                            <p class="url">参考URL</p>
                            <p>https://www.ダミーURL.com</p>
                        </div>
                        <div class="contents">
                            <p class="topic-title">タイトル</p>
                            <p>ダミーテキスト。</p>
                            <p class="content-body">内容</p>
                            <p>親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。</p>
                            <p class="url">参考URL</p>
                            <p>https://www.ダミーURL.com</p>
                        </div>
                        <div class="contents">
                            <p class="topic-title">タイトル</p>
                            <p>ダミーテキスト。</p>
                            <p class="content-body">内容</p>
                            <p>親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。</p>
                            <p class="url">参考URL</p>
                            <p>https://www.ダミーURL.com</p>
                        </div>
                    </div>
                    <div class="topics">
                        <div class="contents">
                            <p class="topic-title">タイトル</p>
                            <p>ダミーテキスト。</p>
                            <p class="content-body">内容</p>
                            <p>親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。</p>
                            <p class="url">参考URL</p>
                            <p>https://www.ダミーURL.com</p>
                        </div>
                        <div class="contents">
                            <p class="topic-title">タイトル</p>
                            <p>ダミーテキスト。</p>
                            <p class="content-body">内容</p>
                            <p>親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。</p>
                            <p class="url">参考URL</p>
                            <p>https://www.ダミーURL.com</p>
                        </div>
                        <div class="contents">
                            <p class="topic-title">タイトル</p>
                            <p>ダミーテキスト。</p>
                            <p class="content-body">内容</p>
                            <p>親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。</p>
                            <p class="url">参考URL</p>
                            <p>https://www.ダミーURL.com</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <footer>

    </footer>
</body>
</html>