<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductType;

class ProductTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $records = [
            [
                'product' => "1",
                'type' => "product.type.red_wine"
            ],
            [
                'product' => "1",
                'type' => "product.type.rosé_wine"
            ],
            [
                'product' => "1",
                'type' => "product.type.semi_sparkling_wine"
            ],
            [
                'product' => "1",
                'type' => "product.type.fully_sparkling_wine"
            ],
            [
                'product' => "1",
                'type' => "product.type.dessert_wine"
            ],
            [
                'product' => "1",
                'type' => "product.type.fortified_wine"
            ],
            [
                'product' => "1",
                'type' => "product.type.sparkling_white_wine"
            ],
            [
                'product' => "1",
                'type' => "product.type.sparkling_red_wine"
            ],
            [
                'product' => "1",
                'type' => "product.type.sparkling_rosé_wine"
            ],
        ];
        foreach ($records as $record) {
            ProductType::create($record);
        }
    }
}
