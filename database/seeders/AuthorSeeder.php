<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        DB::table('authors')->insert([
            'name' => 'Tere Liye',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('authors')->insert([
            'name' => 'Leila S Chudori',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        DB::table('authors')->insert([
            'name' => 'Eka Kurniawan',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        DB::table('authors')->insert([
            'name' => 'J.K Rowling',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        DB::table('authors')->insert([
            'name' => 'Masashi Kishimoto',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
