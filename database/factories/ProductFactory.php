<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => random_int(1, 4000000),
            'category' => random_int(1, 4000),
            'title' => $this->faker->company,
            'content' => $this->faker->text,
            'price' => random_int(100, 1000000),
            'transaction_type' => $this->faker->text,
            'date' => $this->faker->date,
            'city' => $this->faker->city,
            'address' => $this->faker->address,
            'author' => $this->faker->word,
            'telephone' => $this->faker->phoneNumber,
            'connection' => $this->faker->text,
            'home_type' => $this->faker->word,
            'room_count' => random_int(1, 200),
            'additional_attr' => $this->faker->text,
            'total_square' => random_int(5, 100000),
            'living_square' => random_int(5, 100000),
            'kitchen_square' => random_int(5, 100000),
            'bathroom' => $this->faker->boolean,
            'repair' => $this->faker->boolean,
            'furniture' => $this->faker->boolean,
            'technique' => $this->faker->text,
            'internet_tv' => $this->faker->boolean,
            'material_house' => $this->faker->word,
            'year_building' => $this->faker->date,
            'count_floors' => random_int(1, 200),
            'elevator' => $this->faker->boolean,
            'parking' => $this->faker->boolean,
            'maximum_guests' => random_int(1, 25),
            'possible_children' => $this->faker->boolean,
            'possible_pets' => $this->faker->boolean,
            'possible_smoking' => $this->faker->boolean,
            'communal_services' => $this->faker->word,
            'other_services' => $this->faker->word,
            'deposit' => $this->faker->boolean,
            'image' => $this->faker->imageUrl,
            'active' => $this->faker->boolean
        ];
    }
}
