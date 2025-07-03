<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReviewRequest;
use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function index()
    {
        $reviews = Review::with('movie')->get();

        return response()->json($reviews);
    }
    public function store(StoreReviewRequest $request, Movie $movie)
    {
        return $movie->reviews()->create($request->validated());
    }

    public function show($id)
    {
        $review = Review::with('movie')->find($id);

        if (!$review) {
            return response()->json(['message' => 'Review not found'], 404);
        }

        return response()->json($review);
    }

    public function update(StoreReviewRequest $request, Movie $movie, Review $review)
    {
        // Ensure the review belongs to the correct movie
        if ($review->movie_id !== $movie->id) {
            return response()->json(['error' => 'Review does not belong to this movie.'], 403);
        }

        $review->update($request->validated());

        return response()->json([
            'message' => 'Review updated successfully.',
            'data' => $review
        ], 200);
    }


    public function destroy(Movie $movie, Review $review)
    {
        $review->delete();
        return response()->noContent();
    }
}
