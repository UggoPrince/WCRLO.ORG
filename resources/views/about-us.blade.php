@extends('layouts.master')

{{-- css --}}
@section('active_about')
    wcrlo-active
@endsection

@section('content')
    @include('components.about.about_hero_section')
    @include('components.about.about_who_we_are')
    @include('components.about.about_objectives_and_action_points')
    @include('components.about.about_mission')
    @include('components.about.about_core_values')
    @include('components.about.about_leadership')
@endsection