@extends('layouts.main-layout')
@section('content')

<div class="main-page">
    <div class="background">
        <div class="background-line align-middle">
            <div class="left-section">
                <span>&lt Hello World! &gt</span>
                <div class="link-section">
                    <a href="{{route('guest.projects.index')}}">
                       -> I miei progetti <-
                    </a>
                </div>
            </div>
            <div class="right-section">
                <div class="title">
                    <h1>Gabriele Saragosa</h1>
                    <span>- Web Developer Junior -</span> 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection