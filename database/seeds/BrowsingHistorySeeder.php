<?php

use Illuminate\Database\Seeder;

class BrowsingHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('browsing_histories')->insert([
            'user_id' => 1,
            'beverage_id' => 1,
        ]);
    }
}
