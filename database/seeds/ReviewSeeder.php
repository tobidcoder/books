<?php

use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *book_id
	review
	comment
	user_id
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
    }
}
