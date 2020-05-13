@extends('layout.default') @section('content')
<form method="post" action="{{ url('/albumForShare/post', $post->id) }}">
    <a href="{{ url('/albumForShare') }}" class="back">
        <img
            class="icon"
            src="{{ asset('/storage/img/back.png') }}"
            alt="newPost"
            width="25px"
            height="25px"
        />
    </a>
    {{ csrf_field() }}
    {{ method_field("patch") }}
    <p>
        <input
            type="text"
            name="title"
            placeholder="enter title"
            value="{{ old('title', $post->title) }}"
        />
        @if($errors-> has('title'))
        <span class="error">{{ $errors-> first('title')}}</span>
        @endif
    </p>
    <p>
        <textarea name="body" placeholder="enter body">{{
            old("body", $post->body)
        }}</textarea>
        @if($errors-> has('body'))
        <span class="error">{{ $errors-> first('body')}}</span>
        @endif
    </p>
    <p>
        <input type="submit" value="更新" />
    </p>
</form>
<script src="/js/main.js"></script>
@endsection
