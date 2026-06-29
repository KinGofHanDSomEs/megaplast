<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'roman@mail.ru',
            'password' => 'romanfedenev',
            'role' => 'admin',
            'name' => 'Роман',
            'lastname' => 'Феденев',
            'patronymic' => 'Дмитриевич',
            'phone' => '89123456789'
        ]);

        foreach (['client', 'employee', 'partner'] as $role) {
            USer::factory(2)->create([
                'role' => $role,
            ]);
        }
    }
}
