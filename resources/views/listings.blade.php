<link rel="stylesheet" href={{asset('assets/css/home.css')}}>

@extends("layouts.listinglayout")

@section("title", "Welcome")

@section ("content")

<link rel="stylesheet" href={{asset('assets/css/listings.css') }}>
</head>
    <h1 class="listing_header"> {{$heading;}}</h1>

@unless (count($listings) == 0)

@foreach($listings as $listing)
<div class='listing_container'>
    <h2 class= "listingname_hover">
        <a class = "listingname" href="/listings/{{$listing['id']}}">{{$listing['title'];}} </a>
    </h2>
</div>
    <div class="flex-container">
        <div class="content-wrap about_content">
            <img class ="image" src={{$listing['image']}}>
        </div>
        <div class="description_container">
        <p class="description_text">
            {{$listing['description'];}} 
        </p>
        </div>
    </div>
        {{-- <div class = "description">{{$listing['description'];}}</div> --}}
     
    </div>
@endforeach;
@else
 <p>There are no listings</p>
@endunless 


</html>
@endsection


{{-- 
    https://stackoverflow.com/questions/64778593/trying-to-align-image-on-the-right-of-text-using-html-css
    --}}