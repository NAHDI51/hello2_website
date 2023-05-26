<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Volunteer>
 */
class Volunteer extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Volunteer::class;
    protected static $id = 1;

    public function definition(): array
    {
        return [
            # Columns of the table: @Volunteer
            
            'id'            => static::$id++,
            'time_joined'   => $this->faker->dateTime(),
            'email_id'      => $this->faker->unique()->safeEmail(),
            'first_name'    => $this->faker->firstName($gender="male"),
            'last_name'     => $this->faker->lastName(),
            'class'         => $this->faker->randomElement(['8,9,10,SSC23,11,12']),
            'section'       => $this->faker->randomElement(['A', 'B', 'C', 'D', 'E', 'F', 'G']),
            'shift'         => $this->faker->randomElement(['Day', 'Morning']),
            'contact_number'=> $this->faker->regexify('^\\+880.{11}$'),
        ];
    }
}
