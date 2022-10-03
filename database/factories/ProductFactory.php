<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Product::class;
    public function definition()
    {
        return [
            'product_id'=>fake()->numerify($string='###'),
            'product_name'=>fake()->randomLetter(),
            'product_image'=>fake()->imageUrl($width=200,$height=200),
            'product_price'=>fake()->numberBetween($min=10,$max=500),                
            'is_sales'=>fake()->numberBetween($min=0,$max=1),
            'description'=>fake()->sentence(),
            'created_at'=>date("Y-m-d"),
            'updated_at'=>date("Y-m-d")
        ];
    }
}
