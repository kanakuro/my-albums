@extends('layout.default') @section('content')

{{ csrf_field() }}
<h1>
    <a href="{{ url('/albumForShare') }}" class="back">
        <img
            class="icon"
            src="{{ asset('/storage/img/back.png') }}"
            alt="newPost"
            width="25px"
            height="25px"
        />
    </a>
    {{$post-> title}}
</h1>
<div>{!! nl2br(e($post-> body)) !!}</div>
<img src="{{ $post->pic1 }}" />
<img src="{{ $post->pic2 }}" />
<img src="{{ $post->pic3 }}" />
<img src="{{ $post->pic4 }}" />
<img src="{{ $post->pic5 }}" />
<div class="comment">
    <ul>
        <!-- <img
            class="icon"
            src="{{ asset('/storage/img/comment.png') }}"
            alt="newPost"
            width="30px"
            height="30px"
        /> -->
        @forelse ($post->comments as $comment)
        <li class="commentList">
            <div>
                {{$user-> name}}
            </div>
            <div>
                {{$comment-> body}}
                <a href="#" class="del" data-id="{{$comment-> id}}">
                    <img
                        class="icon"
                        src="{{ asset('/storage/img/delete.png') }}"
                        alt="newPost"
                        width="15px"
                        height="16px"
                    />
                </a>
            </div>
            <form
                method="post"
                action="{{
                    action('CommentsController@destroy', [$post, $comment])
                }}"
                id="form_{{$comment-> id}}"
            >
                {{ csrf_field() }}
                {{ method_field("delete") }}
            </form>
        </li>
        @empty
        <li>コメントなし</li>
        @endforelse
    </ul>
</div>
<form method="post" action="{{ action('CommentsController@store', $post) }}">
    {{ csrf_field() }}
    <p>
        <input
            type="text"
            name="body"
            placeholder="enter comment"
            value="{{ old('body') }}"
        />
        @if($errors-> has('body'))
        <span class="error">{{ $errors-> first('body')}}</span>
        @endif
    </p>
    <p>
        <input type="submit" value="コメントする" />
    </p>
</form>

<script src="/js/main.js"></script>
@endsection
