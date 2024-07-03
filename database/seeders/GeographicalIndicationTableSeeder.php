<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GeographicalIndication;

class GeographicalIndicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $records = [
            [
                'label' => "product.geographicalIndication.doc"
            ],
            [
                'label' => "product.geographicalIndication.docg"
            ],
            [
                'label' => "product.geographicalIndication.dop"
            ],
            [
                'label' => "product.geographicalIndication.igt"
            ],
            [
                'label' => "product.geographicalIndication.igp"
            ],
            [
                'label' => "product.geographicalIndication.vdt"
            ],
            [
                'label' => "product.geographicalIndication.vp"
            ],
            [
                'label' => "product.geographicalIndication.doq"
            ],
        ];
        foreach ($records as $record) {
            GeographicalIndication::create($record);
        }
    }
}
