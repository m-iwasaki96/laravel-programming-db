<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <!-- <link rel="stylesheet" href="{{ asset('/css/style.css')  }}"> -->
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
    <header>
        <div id="navi">
            <div id="title">
                <h1><a href="{{ route('items.index') }}">プログラミングDB</a> </h1>
            </div>
            <div id="user">
                <a href="#" id="user-name">新規登録</a>
            </div>
        </div>
    </header>

    <main>
        <form action="" id="login">
            <h1>USER LOGIN</h1>
            <div>
                <input type="email" placeholder="E-mail" name="email">
            </div>
            <div>
                <input type="password" placeholder="Password" name="password">
            </div>
            <button type="submit">Login</button>
        </form>
    </main>
</body>
</html>