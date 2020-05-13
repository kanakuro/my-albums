<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="/css/style.css" />
        <title>@yield('title')</title>
    </head>
    <body>
        <div class="menu_list" id="menu_list">
            <button class="menuListClose" id="menuListClose">
                ×
            </button>
            <ul>
                <li class="close-sidebar" href="#">ホーム</li>
                <li class="close-sidebar" href="#">アカウント新規登録</li>
                <li class="close-sidebar" href="#">ログアウト</li>
            </ul>
        </div>

        <div>
            <div class="header">
                <div class="headerLine">
                    <button class="menuListOpen" id="menuListOpen">
                        <span id="toggle-sidebar" class="button icon">
                            <img
                                class="burgerMenu"
                                src="{{ asset('/storage/img/burgerMenu.png') }}"
                                alt="burgerMenu"
                                width="30px"
                                height="30px"
                            />
                        </span>
                    </button>
                    <div class="logo">
                        <img
                            class="titleImg"
                            src="{{ asset('/storage/img/title.png') }}"
                            width="300px"
                            height="60px"
                        />
                    </div>
                </div>
            </div>
            <div class="container">
                @yield('content')
            </div>
        </div>
    </body>
</html>
