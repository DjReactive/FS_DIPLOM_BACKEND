<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login(Request $request)
    {
        return $this->userRepository->login($request);
    }

    public function logout(Request $request)
    {
        return $this->userRepository->logout($request);
    }

    public function register(Request $request)
    {
        return $this->userRepository->register($request);
    }

    public function me(Request $request)
    {
        return $this->userRepository->me($request);
    }
}
