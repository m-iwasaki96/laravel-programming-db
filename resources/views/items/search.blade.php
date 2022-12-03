<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>検索</title>
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
                <a href="{{ route('items.search') }}" class="btn">検索</a>
            </aside>
            <section id="register-section">
                <h1>キーワード検索</h1>
                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('items.search') }}">
                    @csrf
                    <div>
                        <label for="title">タイトル</label>
                        <input type="text" name="title" class="input-area" value="{{ $request->input('title') }}">
                    </div>
                    <div>
                        <label for="content" class="form_content">内容</label>
                        <textarea name="content" cols="50" rows="10" class="input-area" value="{{ $request->input('content') }}"></textarea>
                    </div>
                    <div>
                        <label for="url">参考URL</label>
                        <input type="text" name="url" class="input-area" value="{{ $request->input('url') }}">
                    </div>
                    <div>
                        <label for="user_id">ユーザーID</label>
                        <input type="text" name="user_id" class="input-area" value="{{ $request->input('user_id') }}">
                    </div>
                    <div>
                        <label for="language">言語(カテゴリ)</label>
                        <input type="text" name="language" class="input-area" value="{{ $request->input('language') }}">
                    </div>
                    <button type="submit">検索</button>    
                </form>
                
                <h2>検索結果</h2>
                @foreach ($items as $item)
                    <ul id="search-result-frame">
                        <h3>タイトル</h3>
                        <li class="search-result">{{ $item->title }}</li>
                        <h3>内容</h3>
                        <li class="search-result">{{ $item->content }}</li>
                        <h3>参考URL</h3>
                        <li class="search-result"><a href="{{ $item->url }}" class="url-link">{{ $item->url }}</a></li>
                        <h3>ユーザーID</h3>
                        <li class="search-result">{{ $item->user_id }}</li>
                        <h3>カテゴリ</h3>
                        <li class="search-result">{{ $item->language }}</li>
                    </ul>
                @endforeach

                {{ $items->links('vendor.pagination.simple-default') }}
            </section>
        </div>
    </main>

    <footer>

    </footer>
</body>
</html>