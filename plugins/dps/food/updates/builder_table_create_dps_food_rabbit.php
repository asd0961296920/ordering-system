<?php namespace Dps\Food\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDpsFoodRabbit extends Migration
{
    public function up()
    {
        Schema::create('dps_food_rabbit', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('problem');
            $table->text('reply');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dps_food_rabbit');
    }
}
