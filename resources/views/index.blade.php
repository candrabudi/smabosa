@extends('frontend.app')

@section('title')
Home - Smabosa
@endsection

@section('content')

@include('frontend.home.hero_slider')
@include('frontend.home.program_study')
@include('frontend.home.about')
@include('frontend.home.bosa_activity')
@include('frontend.home.pcpdb')
@include('frontend.home.bosa_achievment')
@include('frontend.home.event')

@endsection