<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    
    public function definition(): array
    {
        return [
            
            'name'=>fake()->sentence(),
            'description'=>fake()->sentence(),
            'url'=>'https://laravel.com/docs/11.x/eloquent-factories',
            'image'=>'https://laravel.com/',
            
        ];
    }
}
