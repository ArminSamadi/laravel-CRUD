<?php

namespace Database\Factories;
use Carbon\carbon;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'user_id'=> function(){
                return User::factory()->create()->id;
            },

            'title' => $this->faker->text,
            'started_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
    }
}
