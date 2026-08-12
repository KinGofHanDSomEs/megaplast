<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            [
                'image_url' => 'resources/images/partners/favorit-windows.jpg',
                'link' => '',
            ],
            [
                'image_url' => 'resources/images/partners/windows-wizard.jpg',
                'link' => '',
            ]
        ];

        foreach ($rows as $row) {
            Partner::create($row);
        }
    }
}
