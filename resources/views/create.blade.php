@extends('layout.default') @section('content')
<form method="post" action="{{ url('/albumForShare/post') }}">
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
    <p>
        <input
            type="text"
            name="title"
            placeholder="enter title"
            value="{{ old('title') }}"
        />
        @if($errors-> has('title'))
        <span class="error">{{ $errors-> first('title')}}</span>
        @endif
    </p>
    <p>
        <textarea name="body" placeholder="enter body">{{
            old("body")
        }}</textarea>
        @if($errors-> has('body'))
        <span class="error">{{ $errors-> first('body')}}</span>
        @endif
    </p>
    <p>
        <input type="submit" value="投稿" />
    </p>
</form>
<script src="/js/main.js"></script>
@endsection
