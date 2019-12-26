@extends('layouts.master')

{{-- css --}}
@section('active_home')
   wcrlo-active
@endsection

@section('content')
   @include('components.bannerCarousel')

   @include('components.home_intro')

   @include('components.home_our_works')

   @include('components.home_start_your_campaign')

   @include('components.home_no_to_violence')

   @include('components.home_how_you_can_help')

@endsection