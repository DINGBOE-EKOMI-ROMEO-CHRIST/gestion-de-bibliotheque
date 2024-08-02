<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'J.K. Rowling',
            'biography' => 'British author, best known for the Harry Potter series.',
        ]);

        Author::create([
            'name' => 'George R.R. Martin',
            'biography' => 'American novelist and short story writer, best known for A Song of Ice and Fire.',
        ]);
    }
}
