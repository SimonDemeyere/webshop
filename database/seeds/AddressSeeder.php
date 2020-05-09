<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PragmaRX\Countries\Package\Countries;
use App\Address;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'street' => 'Klijtstraat',
            'house_number' => '22',
            'postcode' => '8560',
            'city' => 'Gullegem',
            'country_id' => 23,
        ]);

        DB::table('addresses')->insert([
            'street' => 'Stationsstraat',
            'house_number' => '4',
            'postcode' => '8550',
            'city' => 'Moen',
            'country_id' => 151,
        ]);
        factory(App\Address::class, 100)->create();
    }
}
