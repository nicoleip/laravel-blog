<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => 'Nikol Paraskova',
            'email' => 'admin@nikol.com',
            'password' => bcrypt('password'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/kittymain.jpg',
            'about' => 'Lorem ipsum dolor sit amet',
            'facebook' => 'facebook.com',
            'youtube'  => 'youtube.com'
        ]);
    }
}
