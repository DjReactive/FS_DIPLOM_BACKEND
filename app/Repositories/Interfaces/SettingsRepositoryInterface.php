<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

interface SettingsRepositoryInterface
{
    public function all();

    public function access();

    public function update(Request $request, string $option);
}
