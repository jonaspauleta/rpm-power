<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Product>
 */
final class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraphs(10, true),
            'image' => 'https://picsum.photos/1280/720?random='.fake()->unique()->slug(),
            'slug' => fake()->unique()->slug(),
            'price' => fake()->randomFloat(2, 100, 5000),
        ];
    }
}
