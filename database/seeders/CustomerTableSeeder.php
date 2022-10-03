<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $limit = 10;

        // for ($i = 0; $i < $limit; $i++){
        //     DB::table('customer')->insert([
        //         'customer_name'=>fake()->name(),
        //         'email'=>fake()->safeEmail(),
        //         'tel_num'=>fake()->phoneNumber(10),
        //         'address'=>fake()->city(),
        //         'is_active'=>'1',
        //         'created_at'=>date("Y-m-d"),
        //         'updated_at'=>date("Y-m-d")
        //     ]);
        // }
        Customer::factory()->count(50)->create();
    }
}
