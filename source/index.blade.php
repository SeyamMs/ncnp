@extends('_layouts.main')

@section('body')
    @include('_partials.index.header')
    @include('_partials.index.main')
    @include('_partials.index.ncnp')
    @include('_partials.index.about')
    @include('_partials.index.goals')
    @include('_partials.index.paths')
    @include('_partials.index.targets')
    @include('_partials.index.aspects')
    @include('_partials.index.timeline')
    @include('_partials.index.faqs')
@endsection
