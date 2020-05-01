<?php

use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Review::create([
            'book_id' => '1',
            'review' => '4',
            'comment' => 'Greate book',
            'user_id' => '2'
        ]);

        App\Review::create([
            'book_id' => '1',
            'review' => '4',
            'comment' => 'cool book',
            'user_id' => '2'
        ]);
        App\Review::create([
            'book_id' => '1',
            'review' => '4',
            'comment' => 'wa ooo book',
            'user_id' => '2'
        ]);
    }
}
