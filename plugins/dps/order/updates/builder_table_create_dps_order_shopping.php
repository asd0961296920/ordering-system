<?php namespace Dps\Order\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDpsOrderShopping extends Migration
{
    public function up()
    {
        Schema::create('dps_order_shopping', function($table)
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
        Schema::dropIfExists('dps_order_shopping');
    }
}
