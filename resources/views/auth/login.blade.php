<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/style.css" />
    </head>
    <body>
        @if(count($errors) > 0)
        <div class="alert">
            @foreach($errors-> all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif
        <form action="{{ route('auth.login') }}" method="post">
            <div class="login">
                <div class="label_login">
                    <div class="label_user_name">ユーザー名</div>
                    <div class="label_password">パスワード</div>
                </div>
                <div class="input_login">
                    <input
                        type="text"
                        class="input_user_name"
                        name="user_name"
                    />
                    <input type="text" class="input_password" name="password" />
                </div>
            </div>
            <button type="submit" class="btn_login">ログイン</button>
            {{ csrf_field() }}
            <a href="{{ route('auth.register') }}">アカウント登録</a>
        </form>
    </body>

    <script src="/js/main.js"></script>
</html>
