<select class="form-select" id="genre" name="genre_id">
    <option selected disabled>{{ __('song.select') . ' ' . __('song.genre') }}</option>
    @foreach($genres as $genre)
        <option value="{{ $genre->id }}">{{ $genre->name  }}</option>
    @endforeach
</select>
