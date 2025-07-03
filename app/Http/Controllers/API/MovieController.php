<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return Movie::with('reviews')->get();
    }

    public function store(StoreMovieRequest $request)
    {
        return Movie::create($request->validated());
    }

    public function show(Movie $movie)
    {
        return $movie->load('reviews');
    }

    public function update(StoreMovieRequest $request, Movie $movie)
    {
        $movie->update($request->validated());
        return $movie;
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return response()->noContent();
    }
}
