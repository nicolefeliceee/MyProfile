@extends('layouts.master')

@section('title', 'Gallery')

@section('css')
    <link rel="stylesheet" href="{{ asset('sl3/css/gallery.css') }}">
@endsection

@section('content')
    <div class="allContainer gallery">
        <div class="section-title">
            <h2>Gallery</h2>
            <p>A slice of my life</p>
        </div>
        <div class="card" style="background-color:
            {{ $gallery->status == "Kids"? 'yellow' : '' }}
            {{ $gallery->status == "Teens"? 'pink' : '' }}
            {{ $gallery->status == "Adult"? 'green' : '' }}
        ">
            <img src="{{ asset('sl3/img/' . $gallery->image) }}" alt="{{ $gallery->title }}">
            <h1>{{ $gallery->title }}</h1>
            <h3>{{ $gallery->status }} - {{ $gallery->yearMoment }}</h3>
            <p>{{ $gallery->story }}</p>
        </div>
    </div>
@endsection


