<?php

namespace Database\Factories;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\Request;

class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->country(),
//            'modality_id' => rand(1,getAllModalities()->count()),
            'modality_id' => 1,
            'muse' => $this->faker->name(true),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Team $team) {
            $team->players()->attach(Player::inRandomOrder()->limit(random_int(1,6))->get()->pluck('id'));
        });
    }
}
