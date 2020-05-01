<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *  
     */
    public function run()
    {
        //seed book table
        App\Book::create([
            'isbn' => '23454343',
            'title' => 'book 1',
            'description' => 'my book 1 of the day'
        ]);

        App\Book::create([
            'isbn' => '2345344343',
            'title' => 'book 2',
            'description' => 'my original book 2'
        ]);

        App\Book::create([
            'isbn' => '2888998984343',
            'title' => 'book 3',
            'description' => 'my day as a developer book 2'
        ]);
    }
}
