<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([
            [
                'title' => 'Tips Memahami Anak Anda Lebih Baik - Panduan Orang Tua!',
                'slug' => 'tips-memahami-anak-anda-lebih-baik',
                'content' => 'Tips Memahami Anak Anda Lebih Baik - Panduan Orang Tua! Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'author_id' => 1,
                'is_featured' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mengapa Mainan untuk anak pra sekolah Penting',
                'slug' => 'mengapa-mainan-untuk-anak-pra-sekolah-penting',
                'content' => 'Mengapa Mainan untuk anak pra sekolah Penting Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'author_id' => 1,
                'is_featured' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mainan Mana yang Terbaik untuk Pra Sekolah',
                'slug' => 'mainan-mana-yang-terbaik-untuk-pra-sekolah',
                'content' => 'Mainan Mana yang Terbaik untuk Pra Sekolah Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'author_id' => 1,
                'is_featured' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
