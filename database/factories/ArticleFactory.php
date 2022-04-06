<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use function PHPUnit\Framework\exactly;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $image = $this->faker->image(public_path('uploads'), 300, 300);
        $arr = explode('\\', $image);
        $name = end($arr);

        return [
            'name' => $this->faker->jobTitle,
            'content' => $this->faker->realText(1000),
            'image' => $name,
            'user_id' => 1
        ];
    }
}
