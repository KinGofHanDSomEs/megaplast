<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $baseImageUrl = 'resources/images/projects/';

        $rows = [
            [
                'images_url' => ['ural/ural.jpg', 'ural/ural2.jpg', 'ural/ural3.jpg'],
                'name' => 'Урал',
                'address' => 'г. Нефтекамск, Юбилейный проспект, д. 18',
                'type' => 'shopping-malls',
                'square' => 4000,
                'period' => '5 месяцев'
            ],
            [
                'images_url' => ['arsenal/arsenal.jfif', 'arsenal/arsenal2.jfif', 'arsenal/arsenal3.jfif'],
                'name' => 'Арсенал',
                'address' => 'г. Нефтекамск, Комсомольский проспект, д. 27Б',
                'type' => 'public-buildings',
                'square' => 250,
                'period' => '1 месяц'
            ],
            [
                'images_url' => ['avtokamsk-service/avtokamsk-service.jfif', 'avtokamsk-service/avtokamsk-service2.jfif'],
                'name' => 'АвтоКамск',
                'address' => 'г. Нефтекамск, Трактовая ул., д. 6/п3',
                'type' => 'shopping-malls',
                'square' => 100,
                'period' => '2 недели'
            ],
            [
                'images_url' => ['butler/butler.jfif'],
                'name' => 'Бутлер',
                'address' => 'г. Нефтекамск, Комсомольский проспект, д. 27А',
                'type' => 'public-buildings',
                'square' => 60,
                'period' => '1,5 недели'
            ],
            [
                'images_url' => ['central-shopping-center/central-shopping-center.jfif', 'central-shopping-center/central-shopping-center2.webp'],
                'name' => 'Торговый комплекс Центральный',
                'address' => 'г. Нефтекамск, Парковая улица, д. 2Е',
                'type' => 'shopping-malls',
                'square' => 300,
                'period' => '1 месяц'
            ],
            [
                'images_url' => ['house1/house.jpg'],
                'name' => 'Квартиры',
                'address' => 'г. Нефтекамск',
                'type' => 'residential-complexes',
                'square' => 500,
                'period' => '2 месяца'
            ],
            [
                'images_url' => ['house2/house.jpg', 'house2/house2.jpg'],
                'name' => 'Общественное здание',
                'address' => 'г. Нефтекамск',
                'type' => 'public-buildings',
                'square' => 100,
                'period' => '2 недели'
            ],
            [
                'images_url' => ['house3/house.jfif'],
                'name' => 'Квартиры',
                'address' => 'г. Нефтекамск',
                'type' => 'residential-complexes',
                'square' => 500,
                'period' => '2 месяца'
            ],
            [
                'images_url' => ['house4/house.jpg'],
                'name' => 'Квартиры',
                'address' => 'г. Нефтекамск',
                'type' => 'residential-complexes',
                'square' => 500,
                'period' => '2 месяца'
            ],
            [
                'images_url' => ['house5/house.jpg'],
                'name' => 'Квартиры',
                'address' => 'г. Нефтекамск',
                'type' => 'residential-complexes',
                'square' => 500,
                'period' => '2 месяца'
            ],
            [
                'images_url' => ['house6/house.jfif', 'house6/house2.jfif'],
                'name' => 'Квартиры',
                'address' => 'г. Нефтекамск',
                'type' => 'residential-complexes',
                'square' => 500,
                'period' => '2 месяца'
            ],
            [
                'images_url' => ['ice-palace/ice-palace.jfif', 'ice-palace/ice-palace2.jfif', 'ice-palace/ice-palace3.jfif'],
                'name' => 'Ледовый Дворец',
                'address' => 'г. Нефтекамск, ул. Ленина, д. 19Д',
                'type' => 'public-buildings',
                'square' => 600,
                'period' => '1,5 месяца'
            ],
            [
                'images_url' => ['lada-service/lada-service.jfif', 'lada-service/lada-service2.jfif', 'lada-service/lada-service3.jfif'],
                'name' => 'Абсолют',
                'address' => 'г. Нефтекамск, Дорожная улица, д. 44Б',
                'type' => 'shopping-malls',
                'square' => 300,
                'period' => '3 недели'
            ],
            [
                'images_url' => ['nissan-service/nissan-service.jfif', 'nissan-service/nissan-service2.jfif'],
                'name' => 'Nissan',
                'address' => 'г. Нефтекамск, Янаульская ул., д. 12Г',
                'type' => 'shopping-malls',
                'square' => 300,
                'period' => '3 недели'
            ],
            [
                'images_url' => ['police-station/police-station.jfif', 'police-station/police-station2.jfif', 'police-station/police-station3.jfif'],
                'name' => 'Полиция',
                'address' => 'г. Нефтекамск, Трактовая ул., д. 2',
                'type' => 'public-buildings',
                'square' => 500,
                'period' => '4 недели'
            ],
            [
                'images_url' => ['real-estate/real-estate.jfif', 'real-estate/real-estate2.jfif', 'real-estate/real-estate3.jfif'],
                'name' => 'Агентство Нефтекамская недвижимость',
                'address' => 'г. Нефтекамск, ул. Ленина, д. 21В',
                'type' => 'business-centers',
                'square' => 500,
                'period' => '4 недели'
            ],
            [
                'images_url' => ['south-shopping-center/south-shopping-center.webp', 'south-shopping-center/south-shopping-center2.jfif'],
                'name' => 'Торговый центр Южный',
                'address' => 'г. Нефтекамск, Парковая ул., д. 2А',
                'type' => 'shopping-malls',
                'square' => 300,
                'period' => '2 недели'
            ],
            [
                'images_url' => ['teacher-college/teacher-college.jpg', 'teacher-college/teacher-college2.webp'],
                'name' => 'Педагогический колледж',
                'address' => 'г. Нефтекамск, ул. Нефтяников, д. 2',
                'type' => 'public-buildings',
                'square' => 450,
                'period' => '3,5 недели'
            ],
            [
                'images_url' => ['tempo-burger/tempo-burger.jfif'],
                'name' => 'Tempo Burger',
                'address' => 'г. Нефтекамск, ул. Ленина, д. 32',
                'type' => 'shopping-malls',
                'square' => 300,
                'period' => '2 недели'
            ],
            [
                'images_url' => ['traffic-police/traffic-police.jfif'],
                'name' => 'Госавтоинспекция',
                'address' => 'г. Нефтекамск, Янаульская ул., д. вл2с3',
                'type' => 'public-buildings',
                'square' => 100,
                'period' => '1 неделя'
            ],
            [
                'images_url' => ['velican/velican.jfif', 'velican/velican2.jfif'],
                'name' => 'Великан',
                'address' => 'г. Нефтекамск, ул. Ленина, д. 82А',
                'type' => 'shopping-malls',
                'square' => 700,
                'period' => '1,5 месяца'
            ],
            [
                'images_url' => ['yves-rocher/yves-rocher.jfif'],
                'name' => 'Yves Rocher',
                'address' => 'г. Нефтекамск, ул. Ленина, д. 32',
                'type' => 'shopping-malls',
                'square' => 150,
                'period' => '1,5 недели'
            ],
        ];

        foreach ($rows as $row) {
            for ($i = 0; $i < count($row['images_url']); $i++) {
                $row['images_url'][$i] = $baseImageUrl . $row['images_url'][$i];
            }

            Project::create($row);
        }
    }
}
