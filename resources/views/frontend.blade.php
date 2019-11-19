@extends('base')

@section('title', 'Welcome')

@section('top-links')
    @auth
        <a href="/backend">Backend</a>
    @endauth
@endsection

@section('main')
    Willkomen auf AIOT
@endsection
