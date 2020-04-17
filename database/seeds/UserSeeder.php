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
            'password' => bcrypt('password'),
        ]);
        factory(App\User::class, 50)->create();
    }
}
