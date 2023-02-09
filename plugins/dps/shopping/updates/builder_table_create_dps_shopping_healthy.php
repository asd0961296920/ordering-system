<?php namespace Dps\Shopping\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDpsShoppingHealthy extends Migration
{
    public function up()
    {
        Schema::create('dps_shopping_healthy', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
            $table->text('disease');
            $table->text('weight');
            $table->text('height');
            $table->text('waistline');
            $table->text('date');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dps_shopping_healthy');
    }
}
