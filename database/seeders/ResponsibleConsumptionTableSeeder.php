<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ResponsibleConsumption;

class ResponsibleConsumptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $records = [
            [
                'label' => "responsible.age",
                'url' => "https://firebasestorage.googleapis.com/v0/b/label-scan-1c165.appspot.com/o/public%2FresponsibleConsumption%2Funderage.svg?alt=media&token=ff71068d-93fc-42ec-9fd5-0c0a5cb799d0"
            ],
            [
                'label' => "responsible.pregnancy",
                'url' => "https://firebasestorage.googleapis.com/v0/b/label-scan-1c165.appspot.com/o/public%2FresponsibleConsumption%2Fpregnant.svg?alt=media&token=bae940be-54fd-4437-93f4-4ed6e8fc0644"
            ],
            [
                'label' => "responsible.drive",
                'url' => "https://firebasestorage.googleapis.com/v0/b/label-scan-1c165.appspot.com/o/public%2FresponsibleConsumption%2Fdriving.svg?alt=media&token=9190dac0-4b69-4535-bb4e-c893665a8467"
            ]
        ];
        foreach ($records as $record) {
            ResponsibleConsumption::create($record);
        }
    }
}
