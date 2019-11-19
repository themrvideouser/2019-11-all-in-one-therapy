@extends('base')

@section('title', 'Willkommen im Backend')

@section('top-links')
    @auth
        <a href="/backend">Patient</a>
        <a href="/backend">Kalender</a>
        <a href="/backend">Dokumentation</a>
        <a href="/">Frontend</a>
    @endauth
@endsection


@section('main')
    Willkomen auf AIOT
@endsection
