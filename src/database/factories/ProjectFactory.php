<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'project_number' => $this->faker->numberBetween(1,100),
            'project_title' => $this->faker->country(),
            'comment' => $this->faker->realText(),
        ];
    }
}
