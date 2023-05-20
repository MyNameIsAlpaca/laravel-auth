@extends('layouts/main-layout')

@section('content')

<div class="container">
  <div class="addProjects">
    <h1>Aggiungi un progetto</h1>
    
    <form action="{{route('admin.projects.store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name">Aggiungi un nome</label>
      <input class="form-control" type="text" id="name" name="name">
    </div>
    <div class="mb-3">
      <label for="desc">Aggiungi una descrizione</label>
      <textarea class="form-control" id="desc" name="desc"></textarea>
    </div>
    <div class="mb-3">
      <label for="language">Aggiungi un linguaggio</label>
      <input class="form-control" type="text" id="language" name="language">
    </div>
    <div class="mb-3">
      <label for="publication_date">Aggiungi una data di pubblicazione</label>
      <input class="form-control" type="date" id="publication_date" name="publication_date">
    </div>
    <div class="mb-3">
      <label for="link">Aggiungi un link</label>
      <input class="form-control" type="text" id="link" name="link">
    </div>
    <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
  </div>
</div>


@endsection