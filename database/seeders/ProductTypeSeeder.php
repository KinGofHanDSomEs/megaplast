<?php

namespace Database\Seeders;

use App\Models\ProductType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ([
            'Алюминиевые двери и витражи',
            'Комплектующие',
            'Нестандартные решения',
            'Остекления и перегородки',
            'Пластиковые окна и двери',
            'Монтаж'
        ] as $type) {
            ProductType::create([
                'type' => $type
            ]);
        }
    }
}
