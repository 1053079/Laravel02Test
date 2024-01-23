<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listings</title>
    <link rel="stylesheet" href={{asset('assets/css/listings.css') }}>
</head>
<body>
    <h1> {{$heading;}}</h1>

@unless (count($listings) == 0)

@foreach($listings as $listing)
    <h2>
        <a class = "listingname" href="/listings/{{$listing['id']}}">{{$listing['title'];}} </a>
    </h2>
    <p>
        <img class = "image" src={{$listing['image']}}>
    </p>
    <p class = "description">
        {{$listing['description'];}}
    </p>   
@endforeach;
@else
 <p>There are no listings</p>
@endunless 

</body>
</html>

