@extends('layouts.main-layout')

@section('content')

<div class="home-admin">
  <div class="container">
    <h1>Benvenuto nella tua pagina!</h1>
    <span><a href="{{route('admin.projects.index')}}">Vai ai progetti</a></span>
  </div>
</div>

@endsection