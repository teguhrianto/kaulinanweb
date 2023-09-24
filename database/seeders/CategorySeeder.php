<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => '2-4',
                'slug' => '2-4',
                'image_url' => null,
                'type' => 'age'
            ],
            [
                'name' => '4-6',
                'slug' => '4-6',
                'image_url' => null,
                'type' => 'age'
            ],
            [
                'name' => '6-8',
                'slug' => '6-8', 'image_url' => null,
                'type' => 'age'
            ],
            [
                'name' => '8-12',
                'slug' => '8-12',
                'image_url' => null, 'type' => 'age'],
            [
                'name' => 'Terbaru',
                'slug' => 'terbaru',
                'image_url' => 'resources/img/category/bg-1.png',
                'type' => 'general'
            ],
            [
                'name' => 'Kids Toy',
                'slug' => 'kids-toy',
                'image_url' => 'resources/img/category/bg-2.png',
                'type' => 'general'
            ],
            [
                'name' => 'Aksesoris',
                'slug' => 'aksesoris',
                'image_url' => 'resources/img/category/bg-3.png',
                'type' => 'general'
            ],
            [
                'name' => 'Trending',
                'slug' => 'trending',
                'image_url' => 'resources/img/category/bg-4.png',
                'type' => 'general'
            ],
        ]);
    }
}
