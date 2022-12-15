<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
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

    public function update(Request $request, $option)
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
