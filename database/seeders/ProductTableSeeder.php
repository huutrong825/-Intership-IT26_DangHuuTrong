<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductTableSeeder extends Seeder
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
        //     DB::table('product')->insert([
        //         'product_id'=>fake()->numerify($string='###'),
        //         'product_name'=>fake()->randomLetter(),
        //         'product_image'=>fake()->imageUrl($width=200,$height=200),
        //         'product_price'=>fake()->numberBetween($min=10,$max=500),                
        //         'is_sales'=>fake()->numberBetween($min=0,$max=1),
        //         'description'=>fake()->sentence(),
        //         'created_at'=>date("Y-m-d"),
        //         'updated_at'=>date("Y-m-d")
        //     ]);
        // }
        
        Product::factory()->count(50)->create();
    }
}
