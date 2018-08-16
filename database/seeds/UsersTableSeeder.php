<?php

use Illuminate\Database\Seeder;
use App\User;

/**
 * UsersTableSeeder Class represent users seeder
 * @author Mohamed Faesal <mohamed.feasal@gmail.com>
 */
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds for user type to generate a dummy users.
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'user-type-id' => 1,
            'name' => 'Mohamed Faesal',
            'email' => 'mohamed.feasal@gmail.com',
            'password' => sha1("123456"),
            'salary' => 4000,
            'bonus-percentage' => 5
        ]);
        User::create([
            'user-type-id' => 2,
            'name' => 'Eslam Galal',
            'email' => 'eslam.galal@gmail.com',
            'password' => sha1("123456"),
            'salary' => 6000,
            'bonus-percentage' => 15
        ]);
        
    }
}
