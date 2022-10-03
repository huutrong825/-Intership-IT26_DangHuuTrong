<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserTableSeeder extends Seeder
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
        //     DB::table('users')->insert([
        //         'name'=>fake()->name(),
        //         'email'=>fake()->safeEmail(),
        //         'email_verified_at'=>now(),
        //         'password'=>Hash::make(Admin),                
        //         'remember_token' => Str::random(10),
        //         'is_active'=>fake()->numberBetween($min = 0, $max = 1),
        //         'is_delete'=>fake()->numberBetween($min = 0, $max = 1),
        //         'group_role'=>fake()->numberBetween($min = 0, $max = 2),
        //         'last_login_at'=>date('Y-m-d H:i:s'),
        //         'last_login_ip'=>fake()->numerify($string = '###.##.###'),
        //         'created_at'=>date("Y-m-d"),
        //         'updated_at'=>date("Y-m-d")
        //     ]);
        // }
       User::factory()->count(12)->create();
    }
}
