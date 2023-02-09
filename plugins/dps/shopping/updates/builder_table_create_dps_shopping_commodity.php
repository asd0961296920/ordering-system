<?php namespace Dps\Shopping\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDpsShoppingCommodity extends Migration
{
    public function up()
    {
        Schema::create('dps_shopping_commodity', function($table)
        {
            $table->engine = 'InnoDB';
            $table->text('username');
            $table->text('commodityname');
            $table->integer('number');
            $table->integer('money');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dps_shopping_commodity');
    }
}
