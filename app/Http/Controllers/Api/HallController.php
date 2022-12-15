<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\HallRequest;
use App\Models\Hall;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HallController extends Controller
{

    public function index()
    {
        return response()->json([
            'data' => Hall::all()
        ], 200);
    }

    public function create(HallRequest $request) {
        return $this->store($request);
    }

    public function store(HallRequest $request)
    {
        return Hall::create($request->validated());
    }

    public function show($id)
    {
        return Hall::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        return Hall::where('id', $id)
            ->update($request->only(
                ['seats_table', 'seats_on_row', 'rows', 'name', 'price', 'vip_price', 'is_available']
            ));
    }

    public function destroy($id)
    {
        return Hall::destroy($id);
    }
}
