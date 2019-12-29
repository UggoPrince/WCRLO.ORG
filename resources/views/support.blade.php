@extends('layouts.master')

{{-- css --}}
@section('active_support')
    wcrlo-active
@endsection

@section('content')
    @include('components.support.support_hero_section')
    @include('components.support.support_how_you_can_help')
@endsection