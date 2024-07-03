<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $records = [
            [
                'label' => "categories.acidity_regulator"
            ],
            [
                'label' => "categories.anti_caking_agent"
            ],
            [
                'label' => "categories.anti_foaming_agent"
            ],
            [
                'label' => "categories.antioxidant"
            ],
            [
                'label' => "categories.bulking_agent"
            ],
            [
                'label' => "categories.clarifying_agents"
            ],
            [
                'label' => "categories.colour"
            ],
            [
                'label' => "categories.emulsifier"
            ],
            [
                'label' => "categories.emulsifying_salts"
            ],
            [
                'label' => "categories.expedition_liqueur"
            ],
            [
                'label' => "categories.firming_agent"
            ],
            [
                'label' => "categories.flavour_enhancer"
            ],
            [
                'label' => "categories.flour_treatment_agent"
            ],
            [
                'label' => "categories.foaming_agent"
            ],
            [
                'label' => "categories.gelling_agent"
            ],
            [
                'label' => "categories.glazing_agent"
            ],
            [
                'label' => "categories.humectant"
            ],
            [
                'label' => "categories.main_ingredient"
            ],
            [
                'label' => "categories.modified_starch"
            ],
            [
                'label' => "categories.other"
            ],
            [
                'label' => "categories.packaging_gases"
            ],
            [
                'label' => "categories.preservatives_and_antioxidants"
            ],
            [
                'label' => "categories.propellent_gas"
            ],
            [
                'label' => "categories.raising_agent"
            ],
            [
                'label' => "categories.sequestrant"
            ],
            [
                'label' => "categories.stabilising_agents"
            ],
            [
                'label' => "categories.sweetener"
            ],
            [
                'label' => "categories.thickener"
            ],
            [
                'label' => "categories.tirage_liqueur"
            ]
        ];
        foreach ($records as $record) {
           Category::create($record);
        }
    }
}
