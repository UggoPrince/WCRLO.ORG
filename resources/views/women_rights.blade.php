@extends('layouts.master')

{{-- css --}}
@section('active_women_rights')
    wcrlo-active
@endsection

@section('content')
    @include('components.women_rights.women_rights_hero_section')
    @include('components.women_rights.women_rights_in_nigeria')
@endsection