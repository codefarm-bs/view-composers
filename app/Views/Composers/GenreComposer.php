<?php

namespace App\Views\Composers;

use App\Models\Genre;
use Illuminate\View\View;

class GenreComposer
{
    public function compose(View $view)
    {
        $view->with('genres', Genre::orderBy('name')->get());
    }
}
