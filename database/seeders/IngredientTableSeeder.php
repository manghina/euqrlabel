<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ingredient;

class IngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $records = [
            [
                'group' => "categories.labels.main_ingredient.main_ingredient",
                'label' => "categories.labels.main_ingredient.concentrated_grape_must"
            ],
            [
                'group' => "categories.labels.main_ingredient.main_ingredient",
                'label' => "categories.labels.main_ingredient.distillate_of_agricultural_origin"
            ],
            [
                'group' => "categories.labels.main_ingredient.main_ingredient",
                'label' => "categories.labels.main_ingredient.dosage_syrup"
            ],
            [
                'group' => "categories.labels.main_ingredient.main_ingredient",
                'label' => "categories.labels.main_ingredient.dried_grape_alcohol"
            ],
            [
                'group' => "categories.labels.main_ingredient.main_ingredient",
                'label' => "categories.labels.main_ingredient.dried_grape_distillate"
            ],
            [
                'group' => "categories.labels.main_ingredient.main_ingredient",
                'label' => "categories.labels.main_ingredient.ethyl_alcohol"
            ],
            [
                'group' => "categories.labels.main_ingredient.main_ingredient",
                'label' => "categories.labels.main_ingredient.grape_marc_spirit"
            ],
            [
                'group' => "categories.labels.main_ingredient.main_ingredient",
                'label' => "categories.labels.main_ingredient.grape_must"
            ],
            [
                'group' => "categories.labels.main_ingredient.main_ingredient",
                'label' => "categories.labels.main_ingredient.grapes"
            ],
            [
                'group' => "categories.labels.main_ingredient.main_ingredient",
                'label' => "categories.labels.main_ingredient.partially_fermented"
            ],
            [
                'group' => "categories.labels.main_ingredient.main_ingredient",
                'label' => "categories.labels.main_ingredient.rectified_concentrated"
            ],
            [
                'group' => "categories.labels.main_ingredient.main_ingredient",
                'label' => "categories.labels.main_ingredient.spirit_drinks_distilled"
            ],
            [
                'group' => "categories.labels.main_ingredient.main_ingredient",
                'label' => "categories.labels.main_ingredient.sucrose"
            ],
            [
                'group' => "categories.labels.main_ingredient.main_ingredient",
                'label' => "categories.labels.main_ingredient.water"
            ],
            [
                'group' => "categories.labels.main_ingredient.main_ingredient",
                'label' => "categories.labels.main_ingredient.wine_alcohol"
            ],
            [
                'group' => "categories.labels.main_ingredient.main_ingredient",
                'label' => "categories.labels.main_ingredient.wine_distillate"
            ],
            [
                'group' => "categories.labels.main_ingredient.main_ingredient",
                'label' => "categories.labels.main_ingredient.wine_spirit"
            ],


            [
                'group' => "categories.labels.acidity_regulator.acidity_regulator",
                'label' => "categories.labels.acidity_regulator.calcium_sulfate"
            ],
            [
                'group' => "categories.labels.acidity_regulator.acidity_regulator",
                'label' => "categories.labels.acidity_regulator.citric_acid"
            ],
            [
                'group' => "categories.labels.acidity_regulator.acidity_regulator",
                'label' => "categories.labels.acidity_regulator.lactic_acid"
            ],
            [
                'group' => "categories.labels.acidity_regulator.acidity_regulator",
                'label' => "categories.labels.acidity_regulator.malic_acid"
            ],
            [
                'group' => "categories.labels.acidity_regulator.acidity_regulator",
                'label' => "categories.labels.acidity_regulator.tartaric_acid"
            ],


            [
                'group' => "categories.labels.clarifying_agent.clarifying_agent",
                'label' => "categories.labels.clarifying_agent.casein",
            ],
            [
                'group' => "categories.labels.clarifying_agent.clarifying_agent",
                'label' => "categories.labels.clarifying_agent.egg",
            ],
            [
                'group' => "categories.labels.clarifying_agent.clarifying_agent",
                'label' => "categories.labels.clarifying_agent.egg_albumin",
            ],
            [
                'group' => "categories.labels.clarifying_agent.clarifying_agent",
                'label' => "categories.labels.clarifying_agent.egg_lysozyme",
            ],
            [
                'group' => "categories.labels.clarifying_agent.clarifying_agent",
                'label' => "categories.labels.clarifying_agent.egg_product",
            ],
            [
                'group' => "categories.labels.clarifying_agent.clarifying_agent",
                'label' => "categories.labels.clarifying_agent.egg_protein",
            ],
            [
                'group' => "categories.labels.clarifying_agent.clarifying_agent",
                'label' => "categories.labels.clarifying_agent.gelatin",
            ],
            [
                'group' => "categories.labels.clarifying_agent.clarifying_agent",
                'label' => "categories.labels.clarifying_agent.milk",
            ],
            [
                'group' => "categories.labels.clarifying_agent.clarifying_agent",
                'label' => "categories.labels.clarifying_agent.milk_products",
            ],
            [
                'group' => "categories.labels.clarifying_agent.clarifying_agent",
                'label' => "categories.labels.clarifying_agent.milk_protein",
            ],
            [
                'group' => "categories.labels.clarifying_agent.clarifying_agent",
                'label' => "categories.labels.clarifying_agent.pea_protein",
            ],
            [
                'group' => "categories.labels.clarifying_agent.clarifying_agent",
                'label' => "categories.labels.clarifying_agent.potassium_caseinate",
            ],
            [
                'group' => "categories.labels.clarifying_agent.clarifying_agent",
                'label' => "categories.labels.clarifying_agent.potato_protein",
            ],
            [
                'group' => "categories.labels.clarifying_agent.clarifying_agent",
                'label' => "categories.labels.clarifying_agent.wheat_protein",
            ],


            [
                'group' => "categories.labels.expedition_liqueur.expedition_liqueur",
                'label' => "categories.labels.expedition_liqueur.concentrated",
            ],
            [
                'group' => "categories.labels.expedition_liqueur.expedition_liqueur",
                'label' => "categories.labels.expedition_liqueur.grape",
            ],
            [
                'group' => "categories.labels.expedition_liqueur.expedition_liqueur",
                'label' => "categories.labels.expedition_liqueur.partially",
            ],
            [
                'group' => "categories.labels.expedition_liqueur.expedition_liqueur",
                'label' => "categories.labels.expedition_liqueur.sucrose",
            ],
            [
                'group' => "categories.labels.expedition_liqueur.expedition_liqueur",
                'label' => "categories.labels.expedition_liqueur.wine",
            ],
            [
                'group' => "categories.labels.expedition_liqueur.expedition_liqueur",
                'label' => "categories.labels.expedition_liqueur.rectified",
            ],


            [
                'group' => "categories.labels.preservatives_and_antioxidant.preservatives_and_antioxidant",
                'label' => "categories.labels.preservatives_and_antioxidant.rectified",
            ],
            [
                'group' => "categories.labels.preservatives_and_antioxidant.preservatives_and_antioxidant",
                'label' => "categories.labels.preservatives_and_antioxidant.lascorbic",
            ],
            [
                'group' => "categories.labels.preservatives_and_antioxidant.preservatives_and_antioxidant",
                'label' => "categories.labels.preservatives_and_antioxidant.dimethyldicarbonate",
            ],
            [
                'group' => "categories.labels.preservatives_and_antioxidant.preservatives_and_antioxidant",
                'label' => "categories.labels.preservatives_and_antioxidant.lysozyme",
            ],
            [
                'group' => "categories.labels.preservatives_and_antioxidant.preservatives_and_antioxidant",
                'label' => "categories.labels.preservatives_and_antioxidant.potassium_hydrogen",
            ],
            [
                'group' => "categories.labels.preservatives_and_antioxidant.preservatives_and_antioxidant",
                'label' => "categories.labels.preservatives_and_antioxidant.potassium_metabisulphite",
            ],
            [
                'group' => "categories.labels.preservatives_and_antioxidant.preservatives_and_antioxidant",
                'label' => "categories.labels.preservatives_and_antioxidant.potassium_sorbate",
            ],
            [
                'group' => "categories.labels.preservatives_and_antioxidant.preservatives_and_antioxidant",
                'label' => "categories.labels.preservatives_and_antioxidant.sulphur_dioxide",
            ],
            [
                'group' => "categories.labels.preservatives_and_antioxidant.preservatives_and_antioxidant",
                'label' => "categories.labels.preservatives_and_antioxidant.sulphites",
            ],
            [
                'group' => "categories.labels.preservatives_and_antioxidant.preservatives_and_antioxidant",
                'label' => "categories.labels.preservatives_and_antioxidant.bisulphite",
            ],


            [
                'group' => "categories.labels.stabilising_agent.stabilising_agent",
                'label' => "categories.labels.stabilising_agent.carboxymethylcellulose",
            ],
            [
                'group' => "categories.labels.stabilising_agent.stabilising_agent",
                'label' => "categories.labels.stabilising_agent.citric_acid",
            ],
            [
                'group' => "categories.labels.stabilising_agent.stabilising_agent",
                'label' => "categories.labels.stabilising_agent.fumaric_acid",
            ],
            [
                'group' => "categories.labels.stabilising_agent.stabilising_agent",
                'label' => "categories.labels.stabilising_agent.gum_arabic",
            ],
            [
                'group' => "categories.labels.stabilising_agent.stabilising_agent",
                'label' => "categories.labels.stabilising_agent.metatartaric_acid",
            ],
            [
                'group' => "categories.labels.stabilising_agent.stabilising_agent",
                'label' => "categories.labels.stabilising_agent.potassium_polyaspartate",
            ],
            [
                'group' => "categories.labels.stabilising_agent.stabilising_agent",
                'label' => "categories.labels.stabilising_agent.potassium_sorbate",
            ],
            [
                'group' => "categories.labels.stabilising_agent.stabilising_agent",
                'label' => "categories.labels.stabilising_agent.yeast_mannoproteins",
            ],


            [
                'group' => "categories.labels.sweetener.sweetener",
                'label' => "categories.labels.sweetener.burned",
            ],
            [
                'group' => "categories.labels.sweetener.sweetener",
                'label' => "categories.labels.sweetener.syrup",
            ],
            [
                'group' => "categories.labels.sweetener.sweetener",
                'label' => "categories.labels.sweetener.concentrated",
            ],
            [
                'group' => "categories.labels.sweetener.sweetener",
                'label' => "categories.labels.sweetener.dextrose",
            ],
            [
                'group' => "categories.labels.sweetener.sweetener",
                'label' => "categories.labels.sweetener.extrawhite",
            ],
            [
                'group' => "categories.labels.sweetener.sweetener",
                'label' => "categories.labels.sweetener.fructose",
            ],
            [
                'group' => "categories.labels.sweetener.sweetener",
                'label' => "categories.labels.sweetener.glucose",
            ],
            [
                'group' => "categories.labels.sweetener.sweetener",
                'label' => "categories.labels.sweetener.must",
            ],
            [
                'group' => "categories.labels.sweetener.sweetener",
                'label' => "categories.labels.sweetener.honey",
            ],
            [
                'group' => "categories.labels.sweetener.sweetener",
                'label' => "categories.labels.sweetener.invertsugar",
            ],
            [
                'group' => "categories.labels.sweetener.sweetener",
                'label' => "categories.labels.sweetener.invertsugarsyrup",
            ],
            [
                'group' => "categories.labels.sweetener.sweetener",
                'label' => "categories.labels.sweetener.semiwhite",
            ],
            [
                'group' => "categories.labels.sweetener.sweetener",
                'label' => "categories.labels.sweetener.sugar",
            ],
            [
                'group' => "categories.labels.sweetener.sweetener",
                'label' => "categories.labels.sweetener.sugarsolution",
            ],
            [
                'group' => "categories.labels.sweetener.sweetener",
                'label' => "categories.labels.sweetener.whitesugar",
            ],


            [
                'group' => "categories.labels.tirage_liqueur.tirage_liqueur",
                'label' => "categories.labels.tirage_liqueur.concentrated",
            ],
            [
                'group' => "categories.labels.tirage_liqueur.tirage_liqueur",
                'label' => "categories.labels.tirage_liqueur.grape",
            ],
            [
                'group' => "categories.labels.tirage_liqueur.tirage_liqueur",
                'label' => "categories.labels.tirage_liqueur.partially",
            ],
            [
                'group' => "categories.labels.tirage_liqueur.tirage_liqueur",
                'label' => "categories.labels.tirage_liqueur.rectified",
            ],
            [
                'group' => "categories.labels.tirage_liqueur.tirage_liqueur",
                'label' => "categories.labels.tirage_liqueur.sucrose",
            ],
            [
                'group' => "categories.labels.tirage_liqueur.tirage_liqueur",
                'label' => "categories.labels.tirage_liqueur.wine",
            ],


            [
                'group' => "categories.labels.packaging_gases.packaging_gases",
                'label' => "categories.labels.packaging_gases.argon",
            ],
            [
                'group' => "categories.labels.packaging_gases.packaging_gases",
                'label' => "categories.labels.packaging_gases.carbon",
            ],
            [
                'group' => "categories.labels.packaging_gases.packaging_gases",
                'label' => "categories.labels.packaging_gases.nitrogen",
            ],

            
        ];
        foreach ($records as $record) {
           Ingredient::create($record);
        }
    }
}
