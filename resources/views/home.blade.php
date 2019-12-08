<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/style.css" />
    </head>
    <body>
        {{ csrf_field() }}
        <button id="logout">ログアウト</button>
        <button>アカウント登録</button>
        <h1>
            <!-- <a href="{{ url('/posts/create') }}" class="header-menu"
                >New Post</a
            > -->
            Blog Post
        </h1>
        <ul>
            @forelse ($posts as $post)
            <li>
                <a
                    href="{{ action('PostsController@show', $post) }}"
                    >{{ $post -> title}}</a
                >
                <a
                    href="{{ action('PostsController@edit', $post) }}"
                    class="edit"
                    >[edit]</a
                >
                <a href="#" class="del" data-id="{{$post-> id}}">[x]</a>
                <form
                    method="post"
                    action="{{ url('/posts', $post-> id)}}"
                    id="form_{{$post-> id}}"
                >
                    {{ csrf_field() }}
                    {{ method_field("delete") }}
                </form>
            </li>
            @empty
            <li>no posts yet</li>
            @endforelse
        </ul>
    </body>

    <script src="/js/main.js"></script>
</html>
