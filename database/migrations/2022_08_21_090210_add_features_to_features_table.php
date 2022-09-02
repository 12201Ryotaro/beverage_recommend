<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFeaturesToFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('features', function (Blueprint $table) {
            $table->integer('rating');
            $table->integer('region');
            $table->integer('apple')->nullable();
            $table->integer('banana')->nullable();
            $table->integer('cherry')->nullable();
            $table->integer('citrus')->nullable();
            $table->integer('fruity')->nullable();
            $table->integer('lemon')->nullable();
            $table->integer('orange')->nullable();
            $table->integer('pear')->nullable();
            $table->integer('raisins')->nullable();
            $table->integer('zest')->nullable();
            $table->integer('balanced')->nullable();
            $table->integer('complex')->nullable();
            $table->integer('dry')->nullable();
            $table->integer('earthy')->nullable();
            $table->integer('heavy')->nullable();
            $table->integer('light')->nullable();
            $table->integer('lingering')->nullable();
            $table->integer('mellow')->nullable();
            $table->integer('mild')->nullable();
            $table->integer('old')->nullable();
            $table->integer('smooth')->nullable();
            $table->integer('barley')->nullable();
            $table->integer('buttery')->nullable();
            $table->integer('butterscotch')->nullable();
            $table->integer('candy')->nullable();
            $table->integer('chocolate')->nullable();
            $table->integer('cinnamon')->nullable();
            $table->integer('cocoa')->nullable();
            $table->integer('corn')->nullable();
            $table->integer('honey')->nullable();
            $table->integer('tea')->nullable();
            $table->integer('toffee')->nullable();
            $table->integer('clove')->nullable();
            $table->integer('coffee')->nullable();
            $table->integer('floral')->nullable();
            $table->integer('licorice')->nullable();
            $table->integer('malty')->nullable();
            $table->integer('mint')->nullable();
            $table->integer('nutmeg')->nullable();
            $table->integer('peaty')->nullable();
            $table->integer('peppery')->nullable();
            $table->integer('roses')->nullable();
            $table->integer('spices')->nullable();
            $table->integer('sugar')->nullable();
            $table->integer('tobacco')->nullable();
            $table->integer('vanilla')->nullable();
            $table->integer('wood')->nullable();
            $table->integer('sherry')->nullable();
            $table->integer('bitter')->nullable();
            $table->integer('brine')->nullable();
            $table->integer('creamy')->nullable();
            $table->integer('ginger')->nullable();
            $table->integer('herbal')->nullable();
            $table->integer('maple')->nullable();
            $table->integer('nutty')->nullable();
            $table->integer('oak')->nullable();
            $table->integer('rich')->nullable();
            $table->integer('salty')->nullable();
            $table->integer('smokey')->nullable();
            $table->integer('sour')->nullable();
            $table->integer('spicy')->nullable();
            $table->integer('sweet')->nullable();
            $table->integer('amber')->nullable();
            $table->integer('brown')->nullable();
            $table->integer('green')->nullable();
            $table->integer('caramel')->nullable();
            $table->integer('pal')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('features', function (Blueprint $table) {
            //
        });
    }
}
