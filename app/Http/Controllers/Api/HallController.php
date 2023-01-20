<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\HallRequest;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\HallRepositoryInterface;
use Illuminate\Http\Request;

class HallController extends Controller
{
    public function __construct(HallRepositoryInterface $hallRepository)
    {
        $this->hallRepository = $hallRepository;
    }

    public function index()
    {
        return $this->hallRepository->all();
    }

    public function create(HallRequest $request) {
        return $this->store($request);
    }

    public function store(HallRequest $request)
    {
        return $this->hallRepository->create($request);
    }

    public function show($id)
    {
        return $this->hallRepository->getById($id);
    }

    public function update(Request $request, $id)
    {
        return $this->hallRepository->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->hallRepository->destroy($id);
    }
}
