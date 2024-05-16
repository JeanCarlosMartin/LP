<?php

namespace Database\Seeders;

use App\Models\User;
//use App\Models\cliente;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application database.
     */
    public function run(): void
    {
        $this->call([
            clienteSeeder::class,
        ]);
    }
}
