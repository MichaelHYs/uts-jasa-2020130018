@extends('layout.master')
@section('title', 'Services')
@section('content')
<hr class="featurette-divider">
    <h1 class="cover-heading">Birthday Sale</h1>
    <p class="lead">
        Enjoy up to 25% off Rooms & Suites our Extraordinary Package and enjoy one extra night on us
    </p>
    <p class="text-Center">
        We offer our best facility and services
    </p>
    <hr class="featurette-divider">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            @forelse ($carousels as $key => $carousel)
                <li data-target="#demo" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
            @empty
                <li data-target="#demo" data-slide-to="0" class="active">
            @endforelse
        </ul>
        <div class="carousel-inner">
            @forelse ($carousels as $key => $carousel)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ $carousel['url'] }}" width="{{ $carousel['width'] }}" height="{{ $carousel['height'] }}">
                </div>
            @empty
                <div class="carousel-item active">
                    <img src="https://placekitten.com/900/300" alt="Placeholder" width="900" height="300">
                </div>
            @endforelse
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

@endsection
