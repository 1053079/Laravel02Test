<link rel="stylesheet" href={{asset('assets/css/home.css')}}>

@extends("layouts.layout")

@section("title", "Welcome")

@section("content")
<div class="welcome-container">
    <h1 class="welcomeText"> Welcome to Blue Lock</h1>
    <p class="welcomeIntro">Ensure that you're not extending another layout within the content section.

      CSS File Inclusion:
      Check for duplicate CSS file inclusions. Ensure that your CSS file is included only once in your layout.

      Example layout (layouts.layout.blade.php):</p>
  </div>
@endsection