<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Review;
use App\Models\Book;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    protected $model = Review::class;
    public function definition()
    {
        return [
            'book_id' => Book::factory(),
            'content' => $this->faker->paragraph,
            'rating' => $this->faker->numberBetween(1, 5),
        ];
    }

}
