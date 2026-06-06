<?php

namespace Database\Seeders;

use App\Models\Vacancy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            [
                'icon_url' => 'resources/images/icons/tool.svg',
                'name' => 'Региональный представитель завода по производству пластиковых и алюминиевых конструкций в г. Набережные Челны',
                'experience' => 'от 1 года',
                'schedule' => '2/2 (дневные смены)',
                'duties' => [],
                'requirements' => [],
                'conditions' => [],
            ],
            [
                'icon_url' => 'resources/images/icons/assistant.svg',
                'name' => 'Менеджер по продажам',
                'experience' => 'от 1 года',
                'schedule' => '2/2 (дневные смены)',
                'duties' => [],
                'requirements' => [],
                'conditions' => [],
            ],
        ];

        foreach ($rows as $row) {
            Vacancy::create($row);
        }
    }
}
