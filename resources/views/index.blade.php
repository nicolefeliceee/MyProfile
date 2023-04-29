@extends('layouts.indexMaster')

@section('metaDescription')
    My profile
@endsection

@section('title', 'Home')

@section('css')
    <link rel="stylesheet" href="{{ asset('sl3/css/index.css') }}">
@endsection

@section('content')
    <header id="header" >
        <div class="container">

            <h1 ><a href="index">Nicole Felice</a></h1>
            <h2 class="desc" >Inquisitive <b>soon-to-be Computer Science graduate</b> skilled in leadership, organizational, and product-development, with a strong foundation in math, programming logic, and problem solving.</h2>

            <nav id="navbar" class="navbar" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="100">
                <ul>
                    <li><a class="nav-link {{ set_active('index') }}" href="{{ route('index') }}">Home</a></li>
                    <li><a class="nav-link {{ set_active('about') }}" href="{{ route('about') }}">About</a></li>
                    <li><a class="nav-link {{ set_active('resume') }}" href="{{ route('resume') }}">Resume</a></li>
                    <li><a class="nav-link {{ set_active('project') }}" href="{{ route('project') }}">Project</a></li>
                    <li><a class="nav-link {{ set_active(['galleries', 'gallery']) }}" href="{{ route('galleries') }}">Gallery</a></li>
                    <li><a class="nav-link {{ set_active('contact') }}" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
@endsection
