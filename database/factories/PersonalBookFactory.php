<?php

namespace Database\Factories;

use App\Models\PersonalBook;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PersonalBook>
 */
class PersonalBookFactory extends Factory
{

    protected $model = PersonalBook::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name'=>$this->faker->name(),
            'gender'=>$this->faker->text(),
            'email'=>$this->faker->unique()->safeEmail(),
            'phone'=>$this->faker->buildingNumber,
            'address'=>$this->faker->address,
            'maritalstatus'=>$this->faker->text(),
            'favcolor'=>$this->faker->text()

        ];
    }
}
