@extends('layout.default') @section('title', 'New Post') @section('content')

{{ csrf_field() }}
<button id="logout">ログアウト</button>
<button>アカウント登録</button>
<h1></h1>
<h2>
    <img
        class="newPost"
        src="storage/addPost.png"
        alt="newPost"
        width="30px"
        height="30px"
    />

    <a href="{{ url('/posts/create') }}" class="header-menu">New Post</a>
</h2>
<ul>
    @forelse ($posts as $post)
    <li>
        <a
            href="{{ action('HomeController@show', $post-> post_id) }}"
            >{{ $post -> title}}</a
        >
        <a href="#" class="del" data-id="{{$post-> id}}">[x]</a>
        <form
            method="post"
            action="{{ url('/posts', $post-> post_id)}}"
            id="form_{{$post-> post_id}}"
        >
            {{ csrf_field() }}
            {{ method_field("delete") }}
        </form>
    </li>
    @empty
    <li>no posts yet</li>
    @endforelse
</ul>
@endsection
