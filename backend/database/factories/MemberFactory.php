<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'mobile' => $this->faker->numerify('675-########'),
            'lat' => $this->faker->latitude(-90, 90),
            'lng' => $this->faker->longitude(-90, 90),
            'electorate_id' => $this->faker->numberBetween(1,111),
            'membership_type_id' => $this->faker->numberBetween(1,3)
        ];
    }
}
