@extends('layout.default') @section('content')
<form
    method="post"
    action="{{ url('/albumForShare/post') }}"
    enctype="multipart/form-data"
>
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
        <input id="file1" type="file" name="image1" />
        <input id="file2" type="file" name="image2" />
        <input id="file3" type="file" name="image3" />
        <input id="file4" type="file" name="image4" />
        <input id="file5" type="file" name="image5" />

        @if ($errors-> has('image'))
        <span class="error">{{ $errors-> first('image') }} </span>
        @endif
    </p>
    <p>
        <input type="submit" value="投稿" />
    </p>
</form>
<script src="/js/main.js"></script>
@endsection
