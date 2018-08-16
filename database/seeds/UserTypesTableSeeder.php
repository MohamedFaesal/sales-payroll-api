<?php

use Illuminate\Database\Seeder;
use App\UserType;

/**
 * UserTypesTableSeeder Class represent user types seeder
 * @author Mohamed Faesal <mohamed.feasal@gmail.com>
 */
class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds for user type to generate available user types.
     * @return void
     */
    public function run()
    {
        UserType::truncate();
        UserType::create([
            'type' => 'admin'
        ]);
        UserType::create([
            'type' => 'user'
        ]);
    }
}
