<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\HallRequest;
use Illuminate\Http\Request;

interface HallRepositoryInterface
{
    public function all();

    public function getById(int $id);

    public function create(HallRequest $request);

    public function update(Request $request, int $id);

    public function destroy(int $id);
}
