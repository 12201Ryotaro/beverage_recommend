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
            'name' => "Sample Beverage",
            'cost' => 1000,
        ]);
    }
}
