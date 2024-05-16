<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Post::class;
    public function definition()
    {
        return [
            'tentruyen' => $this -> faker ->name(),
            'anhgioithieu' => $this->faker->imageUrl(),
            'theloai' => $this ->faker -> randomElement(['Truyện cười','Hoạt Hình','Anime']),
            'thongtingioithieu' => $this->faker->paragraph(2, 50),
            'gia'=>random_int(50,1000),
            'tacgia'=> $this -> faker -> name(),
            'nxb'=>$this -> faker ->randomElement(['NXB Nhi đồng','NXB Hoạt hình','NXB Anime']),
            'category_id'=>random_int(1,3),
        ];
    }
}
