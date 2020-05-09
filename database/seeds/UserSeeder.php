<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Simon',
            'last_name' => 'Demeyere',
            'email' => 'Simon.demeyere@hotmail.com',
            'address_id' => 1,
            'role_id' => 1,
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert( [
            'first_name' => 'Louise',
            'last_name' => 'Schellaert',
            'email' => 'Louise.Schellaert@hotmail.com',
            'address_id' => 2,
            'role_id' => 2,
            'password' => bcrypt('password'),
        ]);

        factory(App\User::class, 50)->create();
    }
}
