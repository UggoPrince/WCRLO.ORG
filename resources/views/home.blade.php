@extends('layouts.master')

{{-- css --}}
@section('active_home')
   wcrlo-active
@endsection

@section('content')
   @include('components.home.bannerCarousel')

   @include('components.home.home_intro')

   @include('components.home.home_our_works')

   @include('components.home.home_start_your_campaign')

   @include('components.home.home_no_to_violence')

   @include('components.home.home_how_you_can_help')

@endsection