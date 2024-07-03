<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Courier;
use App\Models\Order;
use App\Models\Region;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $regions = Region::factory(5)
            ->create();
        $region_ids = $regions->pluck('id');

        $couriers = Courier::factory(rand(20, 25))
            ->create()
            ->each(function(Courier $object) use ($region_ids) {
                $attaching_ids = $region_ids->random(rand(1, 3));
                foreach ($attaching_ids as $attaching_id) {
                    $object->regions()->attach($attaching_id);
                }
                $object->save();
            });

        $courier_ids = $couriers->pluck('id');

        Order::factory(rand(100, 110))
            ->create()
            ->each(function(Order $object) use ($courier_ids, $region_ids) {
                $object->region_id = $region_ids->random();

                if (($object->status === 'completed') ||
                    (rand(0, 3) === 0)
                ) {
                    $object->courier_id = $courier_ids->random();
                }

                $object->save();
            });
    }
}
