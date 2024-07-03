<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Types;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $records = [
            [
                'label' => "product.types.beer"
            ],
            [
                'label' => "product.types.wine"
            ],
            [
                'label' => "product.types.marketing"
            ],
            [
                'label' => "product.types.spirits"
            ],
            [
                'label' => "product.types.oil"
            ],
            [
                'label' => "product.types.vinegard"
            ]
        ];
        foreach ($records as $record) {
            Types::create($record);
        }
    }
}
