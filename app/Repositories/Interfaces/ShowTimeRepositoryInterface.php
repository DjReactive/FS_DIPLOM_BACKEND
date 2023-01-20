<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\ShowTimeRequest;
use Illuminate\Http\Request;

interface ShowTimeRepositoryInterface
{
    public function all();

    public function getById(int $id);

    public function create(ShowTimeRequest $request);

    public function update(Request $request, int $id);

    public function destroy(int $id);
}
