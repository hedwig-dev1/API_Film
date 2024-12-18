<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function listCategories()
    {
        return response()->json(Category::all());
    }

    public function listFilms(Request $request)
    {
        $query = Film::query();

        if ($request->has('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        return response()->json($query->get());
    }

    public function detailFilm($id)
    {
        $film = Film::with('category')->find($id);

        if (!$film) {
            return response()->json(['message' => 'Film not found'], 404);
        }

        return response()->json($film);
    }
}

