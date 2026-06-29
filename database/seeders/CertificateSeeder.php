<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $baseImageUrl = 'resources/images/certificates/';

        for ($i = 1; $i <= 15; $i++) {
            Certificate::create([
                'url' => $baseImageUrl . $i . '.jpg',
                'name' => 'Сертификат соответствия',
                'download_filename' => 'certificate_' . $i . '.jpg',
            ]);
        }
    }
}
