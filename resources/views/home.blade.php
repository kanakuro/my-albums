@extends('layout.default') @section('content')

{{ csrf_field() }}
<div class="posts">
    <div class="newPosts">
        <a href="{{ url('/albumForShare/create') }}" class="header-menu">
            <img
                class="icon"
                src="{{ asset('/storage/img/addPost.png') }}"
                alt="newPost"
                width="60px"
                height="65px"
            />
        </a>
    </div>
    <div class="existingPosts">
        <ul>
            @forelse ($posts as $post)
            <li>
                <a
                    href="{{ action('HomeController@show', $post) }}"
                    class="homeLink"
                    >{{ $post -> title}}</a
                >
                <a
                    href="{{ action('HomeController@edit', $post) }}"
                    class="homeLink"
                >
                    <img
                        class="icon"
                        src="{{ asset('/storage/img/edit.png') }}"
                        alt="newPost"
                        width="15px"
                        height="16px"
                    />
                </a>
                <a href="#" class="del" data-id="{{$post-> id}}">
                    <img
                        class="icon"
                        src="{{ asset('/storage/img/delete.png') }}"
                        alt="newPost"
                        width="15px"
                        height="16px"
                    />
                </a>
                <form
                    method="post"
                    action="{{ url('/albumForShare', $post-> id)}}"
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
    </div>
</div>
<script src="/js/main.js"></script>
@endsection
