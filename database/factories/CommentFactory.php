<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\models\Comment;
use App\models\Post;
use App\models\User;
use Database\Factories\Helpers\FactoryHelper;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
      $postId = FactoryHelper::getRandomModelId(Post::class);
      $userId = FactoryHelper::getRandomModelId(User::class);


        return [
            'body' => [],
            'user_id' => $userId,
            'post_id' => $postId,
        ];
    }
}
