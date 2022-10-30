<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プログラミングDBシステム</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css')  }}">
</head>
<body>
    <header>
        <div id="navi">
            <div id="title">
                <h1><a href="{{ route('items.index') }}">プログラミングDB</a> </h1>
            </div>
            <div id="user">
                <a href="#" id="user-name">ユーザー名</a>
            </div>
        </div>
    </header>

    <main>
        @if (session('flash_message'))
            <p>{{ session('flash_message') }}</p>
        @endif

        <div id="main-content">
            <aside>
                <a href="{{ route('items.create') }}" class="btn">登録</a>
                <a href="" class="btn">検索</a>
            </aside>
            <section>
                <h2>詳細</h2>
                <div>
                    <h3>{{ $item->title }}</h3>
                    <p>{{ $item->content }}</p>
                    <p>{{ $item->url }}</p>
                    <p>{{ $item->user_id }}</p>
                    <p>{{ $item->language }}</p>
                </div>
                <div>
                    <a href="{{ route('items.edit', $item) }}" class="button">編集</a>
                    <form action="{{ route('items.destroy', $item) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="button">削除</button>
                    </form>
                    <a href="{{ route('items.index') }}">&lt; 戻る</a>
                </div>
            </section>
        </div>
    </main>

</body>
</html>