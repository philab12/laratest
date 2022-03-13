<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'body' => [],

        ];
    }


    public function untitled(){
        return $this->state([
            'title' => 'untitled'
        ]);
    }
}
