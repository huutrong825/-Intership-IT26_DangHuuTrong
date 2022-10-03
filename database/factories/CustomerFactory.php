<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model=Customer::class;
    public function definition()
    {
        return [
            /* Tạo dữ liệu các cột trong bảng Customer */
            'customer_name'=>fake()->name(),
            'email'=>fake()->safeEmail(),
            'tel_num'=>fake()->phoneNumber(10),
            'address'=>fake()->city(),
            'is_active'=>'1',
            'created_at'=>date("Y-m-d"),
            'updated_at'=>date("Y-m-d")
        ];
    }
}
