<?php

namespace App\Http\Controllers;

use App\Events\NewSongCreatedEvent;
use App\Models\Song;
use App\Models\Genre;
use Illuminate\Support\Facades\Auth;

class SongController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $songs = Song::paginate(15);

        return view('songs.index', compact('songs'));
    }

    public function create()
    {
        return view('songs.create');
    }

    public function store()
    {
        $data = \request()->validate([
            'name' => 'required|min:3|max:120',
            'genre_id' => 'required'
        ]);

        $song = Auth::user()->songs()->create($data);

        event(new NewSongCreatedEvent(Auth::user(), $song));

        return redirect('songs');
    }

    public function show(Song $song)
    {
        return view('songs.show', compact('song'));
    }

    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    }

    public function update(Song $song)
    {
        $data = \request()->validate([
            'name' => 'required|min:3|max:120',
            'genre_id' => 'required'
        ]);

        $song->update($data);

        return redirect('songs');
    }

    public function destroy(Song $song)
    {
        $song->delete();

        return redirect('songs');
    }
}

