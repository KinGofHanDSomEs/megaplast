<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\ProductType;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\Logging\OpenTestReporting\Status;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $message = 'Оставляю заявку';

        $users = User::all();
        $productTypes = ProductType::all();
        $statuses = ['rejected', 'review', 'refine', 'accepted', 'completed'];

        $montageAddress = $remainingPrice = $executionAt = $rejectionMessage = $price = null;

        foreach ($users as $user) {
            foreach ($statuses as $status) {
                $productType = $productTypes->random();
                $montageAddress = $remainingPrice = $price = $executionAt = $rejectionMessage = null;

                if ($productType['type'] === 'Монтаж') {
                    $montageAddress = 'г. Нефтекамск, ул. Ленина, д. 4';
                }

                switch ($status) {
                    case 'accepted':
                    case 'completed':
                        $remainingPrice = $price = rand(5000, 500000);
                        $executionAt = now()->addDays(rand(3, 10));
                        break;
                    case 'rejected':
                        $remainingPrice = $price = 0;
                        $rejectionMessage = 'Неверная заявка';
                }


                Order::factory()->count(3)->create([
                    'user_id' => $user->id,
                    'type_id' => $productType['id'],
                    'status' => $status,
                    'message' => $message,
                    'montage_address' => $montageAddress,
                    'remaining_price' => $remainingPrice,
                    'execution_at' => $executionAt,
                    'rejection_message' => $rejectionMessage,
                    'price' => $price,
                ]);

                $productType = $productTypes->last();
                $montageAddress = 'г. нефтекавыафыва';

                Order::create([
                    'user_id' => $user->id,
                    'type_id' => $productType['id'],
                    'status' => $status,
                    'message' => $message,
                    'montage_address' => $montageAddress,
                    'remaining_price' => $remainingPrice,
                    'execution_at' => $executionAt,
                    'rejection_message' => $rejectionMessage,
                    'price' => $price,
                ]);
            }
        }
    }
}
