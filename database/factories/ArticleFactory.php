<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding mode.
     * 
     * @var string
     */

    protected $model = Aritcle::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(15),
            // on veut 15 mots
            'body' => $this->faker->text(200),
            // on veut 50 phrases
            'user_id' => 1,
            'image' => $this->faker->image('public/images'),
        ];
    }
}