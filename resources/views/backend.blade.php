@extends('base')

@section('title', 'Willkommen im Backend')

@section('top-links')
    @auth
        <a href="/patients">Patienten</a>
        <a href="/calender">Kalender</a>
        <a href="/documentation">Dokumentation</a>
        |
        <a href="/">Frontend</a>
    @endauth
@endsection


@section('main')
    Willkomen auf AIOT
@endsection
