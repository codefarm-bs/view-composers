@extends('layouts.app')

@section('title', __('song.new'))

@section('content')
    <h1>{{ __('song.new') }}</h1>
    <form class="mb-4 mt-4" method="POST" action="/songs">
        <div class="col-lg-6 mb-3">
            <label for="name" class="form-label">{{ __('song.name') }}</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            <div class="text-danger">{{ $errors->first('name') }}</div>
        </div>
        <div class="col-lg-6 mb-3">
            <label for="genre" class="form-label">{{ __('song.genre') }}</label>

            @include('components.genres.dropdown')

            <div class="text-danger">{{ $errors->first('genre_id') }}</div>
        </div>
        <button type="submit" class="btn btn-primary text-white">{{ __('song.add') }}</button>
        @csrf()
    </form>
@endsection

