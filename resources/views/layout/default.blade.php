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
                <img
                    class="closeButton"
                    src="{{ asset('/storage/img/closeButton.png') }}"
                    alt="closeButton"
                    width="20px"
                    height="20px"
                />
            </button>
            <ul>
                <li class="close-sidebar">
                    <a href="/albumForShare">ホーム</a>
                </li>
                <li class="close-sidebar" href="#">アカウント新規登録</li>
                <li class="close-sidebar">
                    <a href="/logout">ログアウト</a>
                </li>
            </ul>
        </div>

        <div>
            <div class="header">
                <div class="headerLine">
                    <button class="menuListOpen" id="menuListOpen">
                        <!-- <span id="toggle-sidebar" class="button icon"> -->
                        <img
                            class="burgerMenu"
                            src="{{ asset('/storage/img/burgerMenu.png') }}"
                            alt="burgerMenu"
                            width="28px"
                            height="28px"
                        />
                        <!-- </span> -->
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
