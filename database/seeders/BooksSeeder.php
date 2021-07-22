<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('books')->insert(
            [
                'title' => 'Bangladesher Itihas',
                'authors' => 'Sri Rameshchandro Majumder',
                'published_date' => 'September 2017',
                'part' => '1'
            ],
            [
                'title' => 'Bangladesher Itihas',
                'authors' => 'Sri Rameshchandro Majumder',
                'published_date' => 'September 2017',
                'part' => '2'
            ],
            [
                'title' => 'Bangladesher Itihas',
                'authors' => 'Sri Rameshchandro Majumder',
                'published_date' => 'September 2017',
                'part' => '3'
            ],
            [
                'title' => 'Bangladesher Itihas',
                'authors' => 'Sri Rameshchandro Majumder',
                'published_date' => 'September 2017',
                'part' => '4'
            ]);
    }
}
