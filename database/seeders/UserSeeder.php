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
            'login' => 'roman',
            'password' => 'admin',
            'role' => 'admin',
            'fio' => 'Феденев Роман Дмитриевич',
            'phone' => '+79991231213',
            'email' => 'roman@mail.ru',
        ]);

        User::factory(10)->create();
    }
}
