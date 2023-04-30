<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Tauseef Shah',
            'email' => 'tauseef@1toinfinity.org',
            'email_verified_at' => now(),
            'password' => bcrypt(
                app()->isLocal()
                    ? '100%safepassword'
                    : Str::random()
            ),
        ]);
    }
}
