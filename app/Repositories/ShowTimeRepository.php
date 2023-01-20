<?php

namespace App\Repositories;

use App\Http\Requests\ShowTimeRequest;
use App\Models\Hall;
use App\Models\Movies;
use App\Models\ShowTimes;
use App\Repositories\Interfaces\ShowTimeRepositoryInterface;
use Illuminate\Http\Request;

class ShowTimeRepository implements ShowTimeRepositoryInterface
{
    public function all()
    {
        return response()->json([
            'data' => ShowTimes::all()
        ], 200);
    }

    public function getById(int $id)
    {
        return ShowTimes::findOrFail($id);
    }

    public function create(ShowTimeRequest $request)
    {
        $movie = Movies::where('id', $request['movie_id'])->firstOrFail();
        $hall = Hall::where('id', $request['hall_id'])->firstOrFail();
        if (!$movie || !$hall) {
            return response()->json([
                'message' => 'Your request invalid'
            ], 400);
        }
        return ShowTimes::create($request->validated());
    }

    public function update(Request $request, int $id)
    {
        return ShowTimes::where('id', $id)
            ->update($request->only(
                ['seats_table', 'seats_on_row', 'rows', 'name', 'price', 'vip_price', 'is_available']
            ));
    }

    public function destroy(int $id)
    {
        // TODO: Implement destroy() method.
    }
}
