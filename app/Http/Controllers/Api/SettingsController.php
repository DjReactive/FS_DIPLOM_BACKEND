<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use App\Repositories\Interfaces\SettingsRepositoryInterface;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct(SettingsRepositoryInterface $settingsRepository)
    {
        $this->settingsRepository = $settingsRepository;
    }

    public function index()
    {
        return $this->settingsRepository->all();
    }

    public function access()
    {
        return $this->settingsRepository->access();
    }

    public function update(Request $request, string $option)
    {
        return $this->settingsRepository->update($request, $option);
    }
}
