<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        DB::table('books')->insert([
            'name' => 'Bumi',
            'image_url' => 'https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/img20220830_10560995.jpg',
            'category_id' => '1',
            'author_id' => '1',
            'price' => 200000,
            'stock' => 50,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('books')->insert([
            'name' => 'Laut Bercerita',
            'image_url' => 'https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/9786024246945_Laut-Bercerita.png',
            'category_id' => '1',
            'author_id' => '2',
            'price' => 150000,
            'stock' => 30,
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        DB::table('books')->insert([
            'name' => 'Cantik Itu Luka',
            'image_url' => 'https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/9786020366517_Cantik-Itu-Luka-Hard-Cover---Limited-Edition.jpg',
            'category_id' => '1',
            'author_id' => '3',
            'price' => 300000,
            'stock' => 5,
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        DB::table('books')->insert([
            'name' => 'Naruto',
            'image_url' => 'https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/picture_meta/2024/1/26/ukxpx6wsmqtgqqtgcltr9j.jpg',
            'category_id' => '2',
            'author_id' => '5',
            'price' => 50000,
            'stock' => 100,
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        DB::table('books')->insert([
            'name' => 'Harry Potter',
            'image_url' => 'https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/9786020379791_Harry-Potter7_Harry-Potter-dan-Relikui-Kematian.jpg',
            'category_id' => '3',
            'author_id' => '4',
            'price' => 400000,
            'stock' => 15,
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        
    }
}
