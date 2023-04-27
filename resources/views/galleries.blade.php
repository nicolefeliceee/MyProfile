@extends('layouts.master')

@section('title', 'Galleries')

@section('css')
    <link rel="stylesheet" href="{{ asset('sl3/css/galleries.css') }}">
@endsection

@section('content')
    <div class="allContainer galleries">
        @foreach ($galleries as $gallery)
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('sl3/img/' . $gallery->image) }}" class="card-img-top" alt="{{ $gallery->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $gallery->title }}</h5>
                    <h6>{{ $gallery->status }} - {{ $gallery->yearMoment }}</h6>
                    <p class="card-text">{{ $gallery->excerpt }}</p>
                    <a href="/galleries/{{ $gallery->slug }}" class="btn btn-primary">See More</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
