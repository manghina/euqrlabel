<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(UserTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(GeographicalIndicationTableSeeder::class);
        $this->call(PackagesTableSeeder::class);
        $this->call(ProductTypeTableSeeder::class);
        $this->call(RecyclingRuleContainersTableSeeder::class);
        $this->call(RecyclingRuleMaterialsTableSeeder::class);
        $this->call(ResponsibleConsumptionTableSeeder::class);
    }
}
