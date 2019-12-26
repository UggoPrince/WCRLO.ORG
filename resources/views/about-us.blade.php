@extends('layouts.master')

{{-- css --}}
@section('active_about')
    wcrlo-active
@endsection

@section('content')
    <div class="hero-wrap set-bg" data-setbg="images/bg_4.jpg" data-stellar-background-ratio="0.5">
        <div class="hero-top static-bg"></div>
        <div class="hero-content opaqueBg opaqueBg-2 static-bg">
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                    <div class="col-md-7 wcrlo-animate2 text-center" data-animation="animated fadeInUp">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Doing Nothing is Not An Option of Our Life</h1>
                    <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">This is Text</p>
    
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <span class="mr-2"><a href="/">Home</a></span> <span>About Us</span>
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.about_who_we_are')
    @include('components.about_objectives_and_action_points')
    @include('components.about_mission')
    @include('components.about_core_values')
    @include('components.about_leadership')
@endsection