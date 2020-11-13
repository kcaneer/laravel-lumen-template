<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;
    public function definition()
    {
        return [
            'title' => $this->faker->text,
            'excerpt'=>$this->faker->text,
            'pages'=>$this->faker->numberBetween(100,1000),
            'cost'=>12.99,
            'value'=>12.99,
            'isbn' => $this->faker->isbn13,
            'released' => $this->faker->dateTime,

        ];
    }
}
