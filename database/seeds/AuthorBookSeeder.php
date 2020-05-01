<?php

use Illuminate\Database\Seeder;

class AuthorBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seed author for book
        App\AuthorBook::create([
            'author_id' => '1',
            'book_id' => '1',
        ]);

        App\AuthorBook::create([
            'author_id' => '1',
            'book_id' => '3',
        ]);
        App\AuthorBook::create([
            'author_id' => '2',
            'book_id' => '2',
        ]);
        App\AuthorBook::create([
            'author_id' => '2',
            'book_id' => '1',
        ]);
        App\AuthorBook::create([
            'author_id' => '2',
            'book_id' => '3',
        ]);
        App\AuthorBook::create([
            'author_id' => '2',
            'book_id' => '2',
        ]);
    }
}
