<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Desert Cake Toy',
                'slug' => 'desert-cake-toy', // Add slug
                'description' => 'Desert Cake Toy is Kaulinan Best Seller',
                'original_price' => 250000, // Add original price
                'discounted_price' => 230000, // Add discounted price
                'image_url' => 'img/products/1.png',
                'badge' => 'Sale',
                'category_id' => 8, // Use the appropriate category ID
            ],
            [
                'name' => 'Wooden Coffee Maker',
                'slug' => 'wooden-coffee-maker', // Add slug
                'description' => 'Wooden Coffee Maker is Kaulinan Best Seller',
                'original_price' => 200000, // Add original price
                'discounted_price' => 150000, // Add discounted price
                'image_url' => 'img/products/2.png',
                'badge' => 'Sale',
                'category_id' => 2, // Use the appropriate category ID
            ],
            [
                'name' => 'Wooden Kitchen Set',
                'slug' => 'wooden-kitchen-set', // Add slug
                'description' => 'Wooden Kitchen Set is Kaulinan Best Seller',
                'original_price' => 330000, // Add original price
                'discounted_price' => null, // Add discounted price
                'image_url' => 'img/products/3.png',
                'badge' => 'Sold Out',
                'category_id' => 3, // Use the appropriate category ID
            ],
            [
                'name' => 'Ice Cream Stall',
                'slug' => 'ice-cream-stall', // Add slug
                'description' => 'Ice Cream Stall is Kaulinan Best Seller',
                'original_price' => 250000, // Add original price
                'discounted_price' => null, // Add discounted price
                'image_url' => 'img/products/4.png',
                'badge' => 'Hot',
                'category_id' => 5, // Use the appropriate category ID
            ],
            [
                'name' => 'Naughty Furry',
                'slug' => 'naughty-furry', // Add slug
                'description' => 'Naughty Furry is Kaulinan Best Seller',
                'original_price' => 145000, // Add original price
                'discounted_price' => null, // Add discounted price
                'image_url' => 'img/products/5.png',
                'badge' => 'New',
                'category_id' => 5, // Use the appropriate category ID
            ],
            [
                'name' => 'Rhino Tosca',
                'slug' => 'rhino-Tosca', // Add slug
                'description' => 'Rhino Tosca is Kaulinan Best Seller',
                'original_price' => 120000, // Add original price
                'discounted_price' => null, // Add discounted price
                'image_url' => 'img/products/6.png',
                'badge' => 'New',
                'category_id' => 6, // Use the appropriate category ID
            ],
        ]);
    }
}
