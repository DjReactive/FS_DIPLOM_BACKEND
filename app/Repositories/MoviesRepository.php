<?php

namespace App\Repositories;

use App\Http\Requests\MovieRequest;
use App\Models\Media;
use App\Models\Movies;
use App\Repositories\Interfaces\MoviesRepositoryInterface;

class MoviesRepository implements MoviesRepositoryInterface
{

    public function all()
    {
        $movies = Movies::all();

        foreach ($movies as $movie) {
            $movie->image = null;
            if ($movie->image_id) {
                $image = Media::query()->where('id', $movie->image_id)->first();
                if ($image) {
                    $movie->image = $image->path;
                }
            }
        }
        return response()->json([
            'data' => $movies
        ], 200);
    }

    public function getById(int $id)
    {
        return Movies::findOrFail($id);
    }

    public function create(MovieRequest $request)
    {
        return Movies::create($request->validated());
    }

    public function destroy(int $id)
    {
        return Movies::destroy($id);
    }
}
