<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

interface UserRepositoryInterface
{
    public function login(Request $request);

    public function register(Request $request);

    public function logout(Request $request);

    public function me(Request $request);
}
