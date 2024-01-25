<link rel="stylesheet" href="{{ asset('assets/css/listings.css') }}">

@extends("layouts.listinglayout")

@section("title", "Welcome")

@section("content")

<!-- If url contains an id, show a button that brings the user back to Listings -->
@if(request('id'))
    <a href="/listings" class="go_back_button">
        <img class="go_back_button_image" src="https://secure.webtoolhub.com/static/resources/icons/set79/d7af0ae5.png">
    </a>
@endif

@unless (count($listings) == 0)

<div class="max-container">
    {{-- <!-- Side bar -- --}}
    <div class="sidebar">    
        <div class="listing_header">
                <p class="heading_text">
                    <img class = "heading_image"src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/889eb94c-1788-4594-8ef6-1c95db584101/dfq4blc-85e81dd5-2075-4feb-b8cc-d6b9b0687316.png/v1/fill/w_698,h_1145/_vector__blue_lock___yoichi_isagi_by_ala21ddin21_dfq4blc-pre.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzg4OWViOTRjLTE3ODgtNDU5NC04ZWY2LTFjOTVkYjU4NDEwMVwvZGZxNGJsYy04NWU4MWRkNS0yMDc1LTRmZWItYjhjYy1kNmI5YjA2ODczMTYucG5nIiwiaGVpZ2h0IjoiPD0xNDc2Iiwid2lkdGgiOiI8PTkwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS53YXRlcm1hcmsiXSwid21rIjp7InBhdGgiOiJcL3dtXC84ODllYjk0Yy0xNzg4LTQ1OTQtOGVmNi0xYzk1ZGI1ODQxMDFcL2FsYTIxZGRpbjIxLTQucG5nIiwib3BhY2l0eSI6OTUsInByb3BvcnRpb25zIjowLjQ1LCJncmF2aXR5IjoiY2VudGVyIn19.04uci4dr7bVykcvBYR_yWNQk0K8zjh7fTbkKYWD4S8Q">
                    {{ $heading[0] }}</p>
                <p class="heading_text">{{ $heading[1] }}</p>
                <p class="heading_text">{{ $heading[2] }}</p>
                <p class="heading_text">{{ $heading[3] }}</p>
        </div>
    </div>  
    
    {{-- loops over the listings--}}
            @foreach($listings as $listing)
                <div class="flex-container2">
                    <div class="content-wrap about_content">
                        <img class="image" src="{{ $listing['image'] }}">
                    </div>
                    <div class="description_container">
                        <h2 class="listingname_hover">
                            <a class="listingname" href="/listings/{{$listing['id']}}">{{$listing['title']}}</a>
                        </h2>
                        <p class="description_text">
                            {{ $listing['description'] }}
                        </p>
                    </div>
                </div>        
   
        @endforeach   

</div> 
        @else
            <p>There are no listings</p>
        @endunless
    
@endsection




{{-- 
    https://stackoverflow.com/questions/64778593/trying-to-align-image-on-the-right-of-text-using-html-css
    --}}