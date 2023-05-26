<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Volunteer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Volunteer>
 */
class VolunteerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Volunteer::class;
    # protected static $lastId=0;

    public function definition(): array
    {   
        /*
        $id_elements = [];
        for($i = 1; $i <= 30; $i++) {
            $id_elementsp[] = $i;
        }
        */
        return [
            # Columns of the table: @Volunteers
            
            # 'id'            => $this->faker->uuid(),
            'time_joined'   => $this->faker->dateTime(),
            'email_id'      => $this->faker->unique()->safeEmail(),
            'first_name'    => $this->faker->firstName($gender="male"),
            'last_name'     => $this->faker->lastName(),
            'class'         => $this->faker->randomElement([8,9,10,11,12]),
            'section'       => $this->faker->randomElement(['A', 'B', 'C', 'D', 'E', 'F', 'G']),
            'shift'         => $this->faker->randomElement(['Day', 'Morning']),
            'contact_number'=> $this->faker->regexify('^\\+880.{11}$'),
        ];
    }
}
