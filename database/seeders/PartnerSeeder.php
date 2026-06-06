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
            ['url' => 'resources/images/partners/favorit-windows.jpg', 'link_website' => 'https://vk.com/oknamrb'],
            ['url' => 'resources/images/partners/windows-wizard.jpg', 'link_website' => 'https://club140742881.orgs.biz'],
        ];

        foreach ($rows as $row) {
            Partner::create($row);
        }
    }
}
