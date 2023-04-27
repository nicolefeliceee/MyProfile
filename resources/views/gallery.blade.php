@extends('layouts.master')

@section('title', 'Gallery')

@section('css')
    <link rel="stylesheet" href="{{ asset('sl3/css/gallery.css') }}">
@endsection

@section('content')
    <div class="allContainer gallery">
        <img src="{{ asset('sl3/img/' . $gallery->image) }}" alt="{{ $gallery->title }}">
        <h1>{{ $gallery->title }}</h1>
        <h3>{{ $gallery->status }} - {{ $gallery->yearMoment }}</h3>
        <p>{{ $gallery->story }}</p>
    </div>
@endsection


