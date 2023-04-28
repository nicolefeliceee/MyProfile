@extends('layouts.master')

@section('title', 'Gallery')

@section('css')
    <link rel="stylesheet" href="{{ asset('sl3/css/gallery.css') }}">
@endsection

@section('content')
    <div class="allContainer gallery">
        <div class="card mb-3 w-100">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title m-0 p-0" style="color:
                            {{ $gallery->status == "Kids"? 'rgb(205,37,251,.7)' : '' }}
                            {{ $gallery->status == "Teens"? 'rgb(251,165,37,.7)' : '' }}
                            {{ $gallery->status == "Adult"? 'rgb(37,155,251,.7)' : '' }}
                            ">{{ $gallery->title }}</h3>
                        <p class="card-text"><small class="text-body-secondary">{{ $gallery->status }} - {{ $gallery->yearMoment }}</small></p>
                        <p class="card-text">{!! $gallery->story !!}</p>
                        <a href="/galleries" class="btn btn-primary" style="background-color:
                            {{ $gallery->status == "Kids"? 'rgb(205,37,251,.7)' : '' }}
                            {{ $gallery->status == "Teens"? 'rgb(251,165,37,.7)' : '' }}
                            {{ $gallery->status == "Adult"? 'rgb(37,155,251,.7)' : '' }}
                        ">Back</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-color" style="background-color:
                        {{ $gallery->status == "Kids"? 'rgb(205,37,251,.7)' : '' }}
                        {{ $gallery->status == "Teens"? 'rgb(251,165,37,.7)' : '' }}
                        {{ $gallery->status == "Adult"? 'rgb(37,155,251,.7)' : '' }}
                    ">
                        <div class="img-fluid" style="background-image: url({{ asset('sl3/img/' . $gallery->image) }})"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


