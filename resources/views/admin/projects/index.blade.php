@extends('layouts/main-layout')

@section('content')
<div class="all-project-admin">
  <div class="container">
    <div class="card-container">
      @foreach ($projects as $project)
      <div class="card-inner">
        <a href="{{ route('projects.edit', $project) }}">Modifica</href=>
        <a href="{{$project->link}}" class="card">
          <div class="div">
            <h5 class="card-title">{{$project->name}}</h5>
            <span class="desc">{{$project->desc}}</span>
            <div class="lang-section">
              <span class="title-lang">Linguaggi utilizzati:</span>
              <span class="lang">{{$project->language}}</span>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection
