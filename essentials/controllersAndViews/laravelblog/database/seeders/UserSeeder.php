<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(['name' => 'Jose Daniel Grijalba Osorio', 
                      'email' => 'jose.jdgo97@gmail.com', 
                      'password' =>bcrypt('12345678')])->assignRole('Admin');
        User::factory(99)->create();
    }
}
