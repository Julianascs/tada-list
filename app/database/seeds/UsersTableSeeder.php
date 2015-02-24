<?php

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::truncate();

        User::create([
            'username' => 'LucasVasconcelos',
            'email' => 'lucasvscn@gmail.com',
            'password' => '1234',
        ]);

        User::create([
            'username' => 'ZaphodBeeblebrox',
            'email' => 'beeblebrox@example.com',
            'password' => '1234',
        ]);
    }
}