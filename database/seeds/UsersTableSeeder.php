<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id' => 1, 'name' => 'admin', 'email' => 'tkykk.0914@gmail.com', 'email_verified_at' => null, 'password' => 'password'],
            ['id' => 2, 'name' => 'kana', 'email' => 'aaa@gmail.com', 'email_verified_at' => null, 'password' => 'password'],
            ['id' => 3, 'name' => 'kuro', 'email' => 'iii@gmail.com', 'email_verified_at' => null, 'password' => 'password'],
        ]);
    }
}
