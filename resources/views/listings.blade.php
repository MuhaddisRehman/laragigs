@unless (count($Listings)==0)
<h1>
    {{$heading}}
</h1>
@foreach ($Listings as $Listing )
    <h2>
        <a href="/listings/{{$Listing['id']}}">
            Title: {{$Listing['title']}}
        </a>
    </h2>
    <p>Description:<p>{{$Listing['description']}}</p></p>
@endforeach
@else
    <h1>No listings</h1>
@endunless