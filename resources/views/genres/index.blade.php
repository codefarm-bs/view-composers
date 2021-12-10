@extends('layouts.app')

@section('title', __('genre.title'))

@section('content')
    <h1>{{ __('genre.title') }}</h1>
    <hr>
    @include('components.genres.list')
@endsection

