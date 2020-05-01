<?php

use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeding dummy content to authors table
        App\Author::create([
            'name' => 'Author book',
            'username' => 'author@books.com',
        ]);

        App\Author::create([
            'name' => 'Author1 book',
            'username' => 'author@books.com',
        ]);

        App\Author::create([
            'name' => 'Author2 books',
            'username' => 'author@books.com',
        ]);
    
    }
}
