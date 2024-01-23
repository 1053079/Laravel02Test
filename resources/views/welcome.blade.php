<link rel="stylesheet" href={{asset('assets/css/home.css')}}>

@extends("layouts.layout")

@section("title", "Welcome")

@section("content")
<div class="welcome-container">
    <h1 class="welcomeText"> Welcome to Blue Lock</h1>
    <p class="welcomeIntro">
        <a href='/listings'>
        Check out Listings!
        </a>
    </p>
  </div>
@endsection