<?php

namespace Database\Factories;

use Faker\Core\Number;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use ReCaptcha\RequestMethod\Post;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public $model =\App\Models\Post::class;
    public function definition(): array
    {
        return [
            'name' => $this->fake()->name(),
            'phone' => $this->fake() -> phoneNumber(),
            // 'price' => $this->fake()>price,
            'created_at' => now()
        ];
    }
}
