<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=User::class;
    public function definition()
    {
        return [
            'name'=>fake()->name(),
                'email'=>fake()->safeEmail(),
                'email_verified_at'=>now(),
                'password'=>Hash::make(Admin),                
                'remember_token' => Str::random(10),
                'is_active'=>fake()->numberBetween($min = 0, $max = 1),
                'is_delete'=>fake()->numberBetween($min = 0, $max = 1),
                'group_role'=>fake()->numberBetween($min = 0, $max = 2),
                'last_login_at'=>date('Y-m-d H:i:s'),
                'last_login_ip'=>fake()->numerify($string = '###.##.###'),
                'created_at'=>date("Y-m-d"),
                'updated_at'=>date("Y-m-d")
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
