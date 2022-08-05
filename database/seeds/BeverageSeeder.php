<?php

use Illuminate\Database\Seeder;

class BeverageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beverages')->insert([
            'name' => "Sample Beverage2",
            'cost' => 2000,
            'about' => "This is a sample beverage2."
        ]);
    }
}
