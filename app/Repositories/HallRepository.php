<?php

namespace App\Repositories;

use App\Http\Requests\HallRequest;
use App\Models\Hall;
use App\Repositories\Interfaces\HallRepositoryInterface;
use Illuminate\Http\Request;

class HallRepository implements HallRepositoryInterface
{
    public function all()
    {
        return response()->json([
            'data' => Hall::all()
        ], 200);
    }

    public function getById(int $id)
    {
        return Hall::findOrFail($id);
    }

    public function create(HallRequest $request)
    {
        return Hall::create($request->validated());
    }

    public function update(Request $request, int $id)
    {
        return Hall::where('id', $id)
            ->update($request->only(
                ['seats_table', 'seats_on_row', 'rows', 'name', 'price', 'vip_price', 'is_available']
            ));
    }

    public function destroy(int $id)
    {
        return Hall::destroy($id);
    }
}
