<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            "name" => "Julian Ramirez",
            "email" => "test@example.com",
        ]);
        DB::table('students')->insert([
            'document' => 1013118945,
            'name' => "Julián Ramírez",
            'grade' => "Contraloria",
            'last_ip' => null
        ]);
        DB::table('students')->insert([
            'document' => 1010200055,
            'name' => "Emily Martinez",
            'grade' => "Cabildante",
            'last_ip' => null
        ]);
        DB::table('students')->insert([
            'document' => 1016595834,
            'name' => "Hannah Arias",
            'grade' => "Personeria",
            'last_ip' => null
        ]);
    }
}
