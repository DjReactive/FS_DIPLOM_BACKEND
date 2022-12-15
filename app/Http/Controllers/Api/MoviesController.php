<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\MovieRequest;
use App\Models\Movies;

class MoviesController extends Controller
{

    public function index()
    {
        return response()->json([
            'data' => Movies::all()
        ], 200);
    }

    public function store(MovieRequest $request)
    {
        return Movies::create($request->validated());
    }

    public function show($id)
    {
        return Movies::findOrFail($id);
    }

    public function destroy($id)
    {
        return Movies::destroy($id);
    }
}
