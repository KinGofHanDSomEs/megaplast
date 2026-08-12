<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\User;
=======
>>>>>>> 65a6a6386df3e72542fe014458e036af01f8b9f6
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
=======
        $this->call([
            UserSeeder::class,
            ProductTypeSeeder::class,
            OrderSeeder::class,
            JobSeeder::class,
            PartnerSeeder::class,
            CertificateSeeder::class,
            ProjectSeeder::class,
>>>>>>> 65a6a6386df3e72542fe014458e036af01f8b9f6
        ]);
    }
}
