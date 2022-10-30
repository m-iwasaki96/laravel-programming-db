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
        <div id="main-content">
            <aside>
                <a href="{{ route('items.create') }}" class="btn">登録</a>
                <a href="" class="btn">検索</a>
            </aside>
            <section id="register-section">
                <h1>新規登録</h1>
                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('items.store') }}" method="post">
                    @csrf
                    <div>
                        <label for="title">タイトル</label>
                        <input type="text" name="title" class="input-area" value="{{ old('title') }}">
                    </div>
                    <div>
                        <label for="content">内容</label>
                        <textarea name="content" cols="50" rows="10" class="input-area">{{ old('content') }}</textarea>
                    </div>
                    <div>
                        <label for="url">参考URL</label>
                        <input type="text" name="url" class="input-area">
                    </div>
                    <div>
                        <label for="user_id">ユーザーID</label>
                        <input type="text" name="user_id" class="input-area" value="{{ old('user_id') }}">
                    </div>
                    <div>
                        <label for="language">言語(カテゴリ)</label>
                        <input type="text" name="language" class="input-area">
                    </div>
                    <button type="submit">登録</button>
                </form>
            </section>
        </div>
    </main>

    <footer>

    </footer>
</body>
</html>