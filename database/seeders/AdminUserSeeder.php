<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'full_name' => 'Admin User',
            'email' => 'admin@bridginggap.com',
            'password' => Hash::make('password'),
            'phone_no' => '1234567890',
            'status' => 'approved',
            'is_admin' => true,
            'approved_at' => now(),
        ]);
    }
}
