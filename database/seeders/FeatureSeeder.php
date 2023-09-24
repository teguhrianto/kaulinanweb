<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('features')->insert([
            [
                'title' => 'Kualitas Terbaik',
                'description' => 'Bahan berkualitas tinggi yang aman dan ramah lingkungan',
                'image_url' => 'https://kaulinan.teguhrianto.com/img/features/1.svg',
            ],
            [
                'title' => 'Inovasi',
                'description' => 'Menerapkan inovasi terbaru dalam desain dan teknologi',
                'image_url' => 'https://kaulinan.teguhrianto.com/img/features/2.svg',
            ],
            [
                'title' => 'Kepuasan Pelanggan',
                'description' => 'Kepuasan pelanggan adalah prioritas utama kami',
                'image_url' => 'https://kaulinan.teguhrianto.com/img/features/3.svg',
            ],
            [
                'title' => 'Gratis Ongkir',
                'description' => 'Layanan pengiriman gratis ke seluruh penjuru negeri',
                'image_url' => 'https://kaulinan.teguhrianto.com/img/features/4.svg',
            ],
        ]);
    }
}
