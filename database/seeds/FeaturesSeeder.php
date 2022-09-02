<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class FeaturesSeeder extends Seeder
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
        $count = 1;
        while ($data = fgetcsv( $fp )) {
            if ($data[0]!="Bottle"){
                foreach($data as $index => $value) {
                    if ($value==''){
                        $data[$index] = (int)0;
                    }
                }
            DB::table('features')->insert([
                'beverage_id' => $count,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'rating' => $data[2],
                'region' => $data[3],
                'apple' => $data[4],
                'banana' => $data[5],
                'cherry' => $data[6],
                'citrus' => $data[7],
                'fruity' => $data[8],
                'lemon' => $data[9],
                'orange' => $data[10],
                'pear' => $data[11],
                'raisins' => $data[12],
                'zest' => $data[13],
                'balanced' => $data[14],
                'complex' => $data[15],
                'dry' => $data[16],
                'earthy' => $data[17],
                'heavy' => $data[18],
                'light' => $data[19],
                'lingering' => $data[20],
                'mellow' => $data[21],
                'mild' => $data[22],
                'old' => $data[23],
                'smooth' => $data[24],
                'barley' => $data[25],
                'buttery' => $data[26],
                'butterscotch' => $data[27],
                'candy' => $data[28],
                'chocolate' => $data[29],
                'cinnamon' => $data[30],
                'cocoa' => $data[31],
                'corn' => $data[32],
                'honey' => $data[33],
                'tea' => $data[34],
                'toffee' => $data[35],
                'clove' => $data[36],
                'coffee' => $data[37],
                'floral' => $data[38],
                'licorice' => $data[39],
                'malty' => $data[40],
                'mint' => $data[41],
                'nutmeg' => $data[42],
                'peaty' => $data[43],
                'peppery' => $data[44],
                'roses' => $data[45],
                'spices' => $data[46],
                'sugar' => $data[47],
                'tobacco' => $data[48],
                'vanilla' => $data[49],
                'wood' => $data[50],
                'sherry' => $data[51],
                'bitter' => $data[52],
                'brine' => $data[53],
                'creamy' => $data[54],
                'ginger' => $data[55],
                'herbal' => $data[56],
                'maple' => $data[57],
                'nutty' => $data[58],
                'oak' => $data[59],
                'rich' => $data[60],
                'salty' => $data[61],
                'smokey' => $data[62],
                'sour' => $data[63],
                'spicy' => $data[64],
                'sweet' => $data[65],
                'amber' => $data[66],
                'brown' => $data[67],
                'green' => $data[68],
                'caramel' => $data[69],
                'pal' => $data[70],
            ]);
            $count += 1;
            }
        }
    }
}
