<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            ['title' => 'test1', 'body' => 'test body 1', 'picURL_1' =>'', 'picURL_2' =>'', 'picURL_3' =>'', 'picURL_4' =>'', 'picURL_5' =>''],
            ['title' => 'test2', 'body' => 'test body 2', 'picURL_1' =>'', 'picURL_2' =>'', 'picURL_3' =>'', 'picURL_4' =>'', 'picURL_5' =>''],
            ['title' => 'test3', 'body' => 'test body 3', 'picURL_1' =>'', 'picURL_2' =>'', 'picURL_3' =>'', 'picURL_4' =>'', 'picURL_5' =>'']
        ]);
    }
}
