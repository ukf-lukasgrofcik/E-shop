<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if ( ! User::where('email', 'admin')->exists() ) User::factory()->create([
            'name' => 'John',
            'surname' => 'Doe',
            'email' => 'admin',
            'password' => bcrypt('admin'),
            'admin' => 1,
        ]);
    }
}
