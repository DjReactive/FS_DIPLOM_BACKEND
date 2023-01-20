<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TicketsRequest;
use App\Repositories\Interfaces\TicketsRepositoryInterface;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function __construct(TicketsRepositoryInterface $ticketsRepository)
    {
        $this->ticketsRepository = $ticketsRepository;
    }

    public function index(Request $request)
    {
        return $this->ticketsRepository->all($request);
    }

    public function create(TicketsRequest $request) {
        return $this->store($request);
    }

    public function store(TicketsRequest $request)
    {
        return $this->ticketsRepository->create($request);
    }

    public function show(string $hashID)   // hash ID
    {
        return $this->ticketsRepository->getById($hashID);
    }

    public function qrcode($id)
    {
        return $this->ticketsRepository->getQRCode($id);
    }

    public function destroy($id)
    {
//        return Tickets::destroy($id);
    }
}
