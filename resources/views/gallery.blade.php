@extends('layouts.master')

@section('title', 'Gallery')

@section('css')
    <link rel="stylesheet" href="{{ asset('sl3/css/gallery.css') }}">
@endsection

@section('content')
    <div class="allContainer gallery">
        @if ($gallery->status === "Kids")
            <div class="card" style="background-color: yellow">
                <img src="{{ asset('sl3/img/' . $gallery->image) }}" alt="{{ $gallery->title }}">
                <h1>{{ $gallery->title }}</h1>
                <h3>{{ $gallery->status }} - {{ $gallery->yearMoment }}</h3>
                <p>{{ $gallery->story }}</p>
            </div>

        @elseif ($gallery->status === "Teens")
            <div class="card" style="background-color: pink">
                <img src="{{ asset('sl3/img/' . $gallery->image) }}" alt="{{ $gallery->title }}">
                <h1>{{ $gallery->title }}</h1>
                <h3>{{ $gallery->status }} - {{ $gallery->yearMoment }}</h3>
                <p>{{ $gallery->story }}</p>
            </div>

        @elseif ($gallery->status === "Adult")
            <div class="card" style="background-color: Green">
                <img src="{{ asset('sl3/img/' . $gallery->image) }}" alt="{{ $gallery->title }}">
                <h1>{{ $gallery->title }}</h1>
                <h3>{{ $gallery->status }} - {{ $gallery->yearMoment }}</h3>
                <p>{{ $gallery->story }}</p>
            </div>

        @endif
    </div>
@endsection


