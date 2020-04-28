<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category' => 'Drum',
        ]);
        DB::table('categories')->insert([
            'category' => 'Guitar',
        ]);
        DB::table('categories')->insert([
            'category' => 'Violin',
        ]);
        DB::table('categories')->insert([
            'category' => 'Piano',
        ]);
    }
}
