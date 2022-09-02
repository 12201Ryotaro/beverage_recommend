<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class BeverageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fp = fopen(__DIR__ . '/production_data.csv', 'r');
 
        // fgetcsvでファイルのデータを読み込む
        while ($data = fgetcsv( $fp )) {
            if ($data[0]!="Bottle"){
            DB::table('beverages')->insert([
            'name' => $data[0],
            'cost' => (int)$data[1],
            'about' => "",
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            }
        }
 
        // ファイルを閉じる
        fclose($fp);
    }
}
