<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        User::create(['uuid' => Str::uuid()->toString(), 'name' => 'John Doe', 'email' => 'john@example.com']);
        User::create(['uuid' => Str::uuid()->toString(),'name' => 'Jane Doe', 'email' => 'jane@example.com']);
    }
}
