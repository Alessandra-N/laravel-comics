@extends('layouts.app')

@section('header_content')
@endsection

@section('main_content')

<h1>Comics Page</h1>

<div class="comic">
    <img src="{{$comic['thumb']}}" alt="">
    {{$comic['title']}}
</div>

@endsection

@section('footer')
@endsection