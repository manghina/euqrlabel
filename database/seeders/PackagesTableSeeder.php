<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Packages;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $records = [
            [
                'label' => "product.bottling.may"
            ],
            [
                'label' => "product.bottling.is"
            ],
        ];
        foreach ($records as $record) {
            Packages::create($record);
        }
    }
}
