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
        <form action="{{ route('auth.register') }}" method="post">
            @csrf {{-- CSRF保護 --}}
            @method('POST')
            <div class="register">
                <div class="label_register">
                    <div class="label_user_name">ユーザー名</div>
                    <div class="label_email">メールアドレス</div>
                    <div class="label_password">パスワード</div>
                </div>
                <div class="input_register">
                    <input
                        type="text"
                        class="input_user_name"
                        name="user_name"
                    />
                    <input type="text" class="input_email" name="email" />
                    <input type="text" class="input_password" name="password" />
                </div>
            </div>
            <button type="submit" class="btn_register">登録</button>
        </form>

        <a href="{{ route('home') }}">戻る</a>
        {{ csrf_field() }}
    </body>

    <script src="/js/main.js"></script>
</html>
