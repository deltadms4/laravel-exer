<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $array = [
            'Недвижимость',
            'Транспорт',
            'Инструменты',
            'Спорт',
            'Животные'
        ];
        $i = random_int(1,4);
            return [

                    'user_id' => random_int(1, 4000000),
                'title' => $array[$i],
                'parent_id' => random_int(1, 200)
        ];

    }

}
