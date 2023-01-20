<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$MlyE.qR6E8OA113pkIOnJePdWhg6BW0mWy8qZxDSSYkrjzD/GGbeW', //admin
            'access' => 3,
            'is_admin' => 1
        ]);
    }
}
