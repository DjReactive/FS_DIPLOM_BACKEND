<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShowTimeRequest;
use App\Models\Hall;
use App\Models\Movies;
use App\Models\ShowTimes;
use Illuminate\Http\Request;

class ShowTimeController extends Controller
{
    public function index()
    {
         return response()->json([
            'data' => ShowTimes::all()
        ], 200);
    }

    public function create(ShowTimeRequest $request) {
        return $this->store($request);
    }

    public function store(ShowTimeRequest $request)
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

    public function show($id)
    {
        return ShowTimes::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        return ShowTimes::where('id', $id)
            ->update($request->only(
                ['seats_table', 'seats_on_row', 'rows', 'name', 'price', 'vip_price', 'is_available']
            ));
    }

    public function destroy($id)
    {
        return ShowTimes::destroy($id);
    }
}
