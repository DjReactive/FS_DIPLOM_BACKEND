<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\TicketsRequest;
use Illuminate\Http\Request;

interface TicketsRepositoryInterface
{
    public function all(Request $request);

    public function getById(string $hashID);

    public function getQRCode(int $id);

    public function create(TicketsRequest $request);

    public function destroy(int $id);
}
