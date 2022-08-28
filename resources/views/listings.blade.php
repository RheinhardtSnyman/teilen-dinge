@extends('layout')

@include('components._hero')

@section('content')
    <h2 class="text-left text-4xl m-5">{{ $heading }}</h2>
    <div id="card-section" class="flex flex-wrap">
        @foreach ($listings as $listing)
            <div id="card-{{ $listing['id'] }}" class="m-5 max-h-96 max-w-xs neumorphic overflow-hidden relative">
                <a href="/listings/{{ $listing['id'] }}">
                    <span style="display: block;">
                    <h3 class="text-2xl text-white absolute bg-black min-w-full bg-opacity-50 z-10 p-3 ">
                        {{ $listing['title'] }}
                    </h3>
                    <div class="overflow-hidden w-full max-h-48 relative">
                        <img src="https://picsum.photos/300/200/?&random={{ $listing['id'] }}" class="w-full" />
                    </div>
                        <p class="text-base p-5">
                        {{ $listing['description'] }}
                    </p>
                    </span>
                </a>
            </div>
        @endforeach
    </div>
@endsection
