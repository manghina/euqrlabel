<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RecyclingRuleContainers;

class RecyclingRuleContainersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $records = [
            [
            'group' => "product.container.empty",
            'label' => "product.container.can"
            ],				
            [
            'group' => "product.container.empty",
            'label' => "product.container.bottle"
            ],				
            [
            'group' => "product.container.empty",
            'label' => "product.container.tetraPak"
            ],				
            [
            'group' => "product.container.empty",
            'label' => "product.container.bagInBox"
            ],				
            [
            'group' => "product.container.empty",
            'label' => "product.container.otherContainer"
            ],				
            [
            'group' => "product.container.empty",
            'label' => "product.container.label"
            ],	
            [
            'group' => "product.container.bottleTop",
            'label' => "product.container.cork"
            ],				
            [
            'group' => "product.container.bottleTop",
            'label' => "product.container.screwCap"
            ],				
            [
            'group' => "product.container.bottleTop",
            'label' => "product.container.crownCap"
            ],				
            [
            'group' => "product.container.bottleTop",
            'label' => "product.container.capsule"
            ],				
            [
            'group' => "product.container.bottleTop",
            'label' => "product.container.wireCage"
            ],				
            [
            'group' => "product.container.bottleTop",
            'label' => "product.container.otherClosure"
            ],				
            [
            'group' => "product.container.packaging",
            'label' => "product.container.bag"
            ],
            [
            'group' => "product.container.packaging",
            'label' => "product.container.case"
            ],				
            [
            'group' => "product.container.packaging",
            'label' => "product.container.box"
            ],				
            [
            'group' => "product.container.packaging",
            'label' => "product.container.giftBox"
            ],				
            [
            'group' => "product.container.packaging",
            'label' => "product.container.tray"
            ],				
            [
            'group' => "product.container.packaging",
            'label' => "product.container.separator"
            ],				
            [
            'group' => "product.container.packaging",
            'label' => "product.container.wrapper"
            ],				
            [
            'group' => "product.container.packaging",
            'label' => "product.container.otherPackaging"
            ],
        ];
        foreach ($records as $record) {
            RecyclingRuleContainers::create($record);
        }
    }
}
