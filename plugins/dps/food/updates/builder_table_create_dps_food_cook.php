<?php namespace Dps\Food\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDpsFoodCook extends Migration
{
    public function up()
    {
        Schema::create('dps_food_cook', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
            $table->text('imager');
            $table->integer('cc');
            $table->integer('money');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dps_food_cook');
    }
}
