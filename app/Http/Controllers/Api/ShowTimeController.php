<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShowTimeRequest;
use App\Repositories\Interfaces\ShowTimeRepositoryInterface;
use Illuminate\Http\Request;

class ShowTimeController extends Controller
{
    public function __construct(ShowTimeRepositoryInterface $showTimeRepository)
    {
        $this->showTimeRepository = $showTimeRepository;
    }

    public function index()
    {
         return $this->showTimeRepository->all();
    }

    public function create(ShowTimeRequest $request) {
        return $this->store($request);
    }

    public function store(ShowTimeRequest $request)
    {
        return $this->showTimeRepository->create($request);
    }

    public function show($id)
    {
        return $this->showTimeRepository->getById($id);
    }

    public function update(Request $request, $id)
    {
        return $this->showTimeRepository->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->showTimeRepository->destroy($id);
    }
}
