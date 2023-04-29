@extends('layouts.master')

@section('metaDescription')
    Slice of my life in photographs
@endsection

@section('title', 'Galleries')

@section('css')
    <link rel="stylesheet" href="{{ asset('sl3/css/galleries.css') }}">
@endsection

@section('content')
    <div class="allContainer galleries">
        <div class="section-title">
            <h2>Gallery</h2>
            <p>A slice of my life</p>
        </div>
        <div class="cardGroup d-flex">
            @foreach ($galleries as $gallery)
                <a href="/galleries/{{ $gallery->slug }}" class="card text-bg-dark">
                    <div class="card-img" style="background-image: url({{ asset('sl3/img/' . $gallery->image) }})"></div>
                    <div class="card-img-overlay m-0" style="color:
                        {{ $gallery->status == "Kids"? 'rgb(205,37,251,1)' : '' }}
                        {{ $gallery->status == "Teens"? 'rgb(251,165,37,1)' : '' }}
                        {{ $gallery->status == "Adult"? 'rgb(37,155,251,1)' : '' }}
                    ">
                        <h5 class="card-title m-0 p-0">{{ $gallery->title }}</h5>
                        <p class="card-text m-0 p-0"><small>{{ $gallery->status }} - {{ $gallery->yearMoment }}</small></p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
