@extends('layout')

@section('content')
<div class="flex content-around justify-center">
<div id="card-{{ $listing['id'] }}" class="m-5 max-w-2xl neumorphic overflow-hidden relative">
    <span style="display: block;">
    <h2 class="text-left text-4xl m-5">
        {{ $listing['title'] }}
    </h2>
    <div class="overflow-hidden w-full max-h-48 relative">
        <img src="https://picsum.photos/300/200/?&random={{ $listing['id'] }}" class="w-full" />
    </div>
    <div class="text-base p-5">
        <p class="mt-5">
            R {{ $listing['price'] }}
        </p>
        <p class="mt-5">
            {{ $listing['description'] }}
        </p>
        <p class="mt-5">
            {{ $listing['location'] }}
        </p>
    </div>
    </span>
</div>
</div>
@endsection
