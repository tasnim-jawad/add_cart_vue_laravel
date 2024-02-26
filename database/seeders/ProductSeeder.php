<?php

namespace Database\Seeders;

use App\Models\Product;
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
        Product::insert([
            [
                'name' => 'mobile phone',
                'price' => '120',
                'image' => "default.png",
            ],
            [
                'name' => 'Mackbook air',
                'price' => '30',
                'image' => "default.png",
            ],
            [
                'name' => 'Table',
                'price' => '50',
                'image' => "default.png",
            ],
            [
                'name' => 'Head Phone',
                'price' => '200',
                'image' => "default.png",
            ],
            [
                'name' => 'mouse',
                'price' => '100',
                'image' => "default.png",
            ],
            [
                'name' => 'keyboard',
                'price' => '430',
                'image' => "default.png",
            ],
            [
                'name' => 'cable',
                'price' => '320',
                'image' => "default.png",
            ],
            [
                'name' => 'monitor',
                'price' => '340',
                'image' => "default.png",
            ],
            [
                'name' => 'something',
                'price' => '40',
                'image' => "default.png",
            ]

            ]);

    }
}

