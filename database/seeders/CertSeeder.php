<?php

namespace Database\Seeders;

use App\Models\Cert;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            ['url' => 'resources/images/certs/1.jpg', 'name' => 'Сертификат соответствия', 'download_filename' => 'cert1.jpg'],
            ['url' => 'resources/images/certs/2.jpg', 'name' => 'Сертификат соответствия', 'download_filename' => 'cert2.jpg'],
            ['url' => 'resources/images/certs/3.jpg', 'name' => 'Сертификат соответствия', 'download_filename' => 'cert3.jpg'],
            ['url' => 'resources/images/certs/4.jpg', 'name' => 'Сертификат соответствия', 'download_filename' => 'cert4.jpg'],
            ['url' => 'resources/images/certs/5.jpg', 'name' => 'Сертификат соответствия', 'download_filename' => 'cert5.jpg'],

            ['url' => 'resources/images/certs/6.jpg', 'name' => 'Сертификат соответствия', 'download_filename' => 'cert6.jpg'],
            ['url' => 'resources/images/certs/7.jpg', 'name' => 'Сертификат соответствия', 'download_filename' => 'cert7.jpg'],
            ['url' => 'resources/images/certs/8.jpg', 'name' => 'Сертификат соответствия', 'download_filename' => 'cert8.jpg'],
            ['url' => 'resources/images/certs/9.jpg', 'name' => 'Сертификат соответствия', 'download_filename' => 'cert9.jpg'],
            ['url' => 'resources/images/certs/10.jpg', 'name' => 'Сертификат соответствия', 'download_filename' => 'cert10.jpg'],

            ['url' => 'resources/images/certs/11.jpg', 'name' => 'Сертификат соответствия', 'download_filename' => 'cert11.jpg'],
            ['url' => 'resources/images/certs/12.jpg', 'name' => 'Сертификат соответствия', 'download_filename' => 'cert12.jpg'],
            ['url' => 'resources/images/certs/13.jpg', 'name' => 'Сертификат соответствия', 'download_filename' => 'cert13.jpg'],
            ['url' => 'resources/images/certs/14.jpg', 'name' => 'Сертификат соответствия', 'download_filename' => 'cert14.jpg'],
            ['url' => 'resources/images/certs/15.jpg', 'name' => 'Сертификат соответствия', 'download_filename' => 'cert15.jpg'],
        ];

        foreach ($rows as $row) {
            Cert::create($row);
        }
    }
}
