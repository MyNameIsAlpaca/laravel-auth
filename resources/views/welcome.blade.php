@extends('layouts.main-layout')
@section('content')

<div class="main-page">
    <div class="container">
        <h1>Benvenuto nel mio Boolfolio</h1>

        <a href="{{route('guest.projects.index')}}">Clicca</a>
    </div>
</div>

@endsection