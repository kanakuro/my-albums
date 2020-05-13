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
<script src="/js/main.js"></script>
@endsection
