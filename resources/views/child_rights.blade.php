@extends('layouts.master')

{{-- css --}}
@section('active_child_rights')
    wcrlo-active
@endsection

@section('content')
    @include('components.child_rights.child_rights_hero_section')
    @include('components.child_rights.child_civil_rights')
    @include('components.child_rights.children_centered_programs')
    @include('components.child_rights.child_right_to_healthcare')
    @include('components.child_rights.voilence_against_children')
    @include('components.child_rights.female_genital_mutilation')
    @include('components.child_rights.child_marriage')
@endsection