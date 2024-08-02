<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Harry Potter and the Philosopher\'s Stone',
            'author_id' => 1, 
            'isbn' => '9780747532699',
            'published_year' => 1997,
        ]);

        Book::create([
            'title' => 'A Game of Thrones',
            'author_id' => 2, 
            'isbn' => '9780553103540',
            'published_year' => 1996,
        ]);
    }
}
