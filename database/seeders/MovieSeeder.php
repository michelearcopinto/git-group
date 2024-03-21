<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = config('movies');

        foreach ($movies as $element) {
            Movie::create([
                'title' => $element['title'],
                'director' => $element['director'],
                'year' => $element['year'],
                'genre' => $element['genre'],
                'rating' => $element['rating'],
            ]);
        }
    }
}
