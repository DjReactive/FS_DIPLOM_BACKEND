<?php

namespace App\Repositories;

use App\Models\Settings;
use App\Repositories\Interfaces\SettingsRepositoryInterface;
use Illuminate\Http\Request;

class SettingsRepository implements SettingsRepositoryInterface
{
    public function all()
    {
        return response()->json([
            'data' => Settings::all()
        ], 200);
    }

    public function access()
    {
        return response()->json([
            'data' => Settings::query()
                ->where('option_access', 0)
                ->get()
        ], 200);
    }

    public function update(Request $request, string $option)
    {
        $sett = Settings::query()->where('option_name', $option)->first();
        if (!$sett) {
            return Settings::create([
                'option_name' => $option,
                'option_value' => $request['value'],
                'option_access' => $request['access'] || 3,
            ]);
        }
        return $sett->update([
            'option_value' => $request['value'],
        ]);
    }
}
