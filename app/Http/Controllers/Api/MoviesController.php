<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\MovieRequest;
use App\Repositories\Interfaces\MoviesRepositoryInterface;

class MoviesController extends Controller
{

    public function __construct(MoviesRepositoryInterface $moviesRepository)
    {
        $this->moviesRepository = $moviesRepository;
    }

    public function index()
    {
        return $this->moviesRepository->all();
    }

    public function store(MovieRequest $request)
    {
        return $this->moviesRepository->create($request);
    }

    public function show($id)
    {
        return $this->moviesRepository->getById($id);
    }

    public function destroy($id)
    {
        return $this->moviesRepository->destroy($id);
    }
}
