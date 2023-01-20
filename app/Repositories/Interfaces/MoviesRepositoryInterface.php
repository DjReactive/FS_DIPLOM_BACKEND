<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\MovieRequest;

interface MoviesRepositoryInterface
{
    public function all();

    public function getById(int $id);

    public function create(MovieRequest $request);

    public function destroy(int $id);
}
