<?php namespace Dps\Order\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDpsOrderHistoricalrecord extends Migration
{
    public function up()
    {
        Schema::create('dps_order_historicalrecord', function($table)
        {
            $table->engine = 'InnoDB';
            $table->text('username');
            $table->text('cookname');
            $table->integer('number');
            $table->integer('money');
            $table->text('address');
            $table->text('date');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dps_order_historicalrecord');
    }
}
