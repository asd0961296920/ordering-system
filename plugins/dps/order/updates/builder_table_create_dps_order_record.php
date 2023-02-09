<?php namespace Dps\Order\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDpsOrderRecord extends Migration
{
    public function up()
    {
        Schema::create('dps_order_record', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('username');
            $table->text('cookname');
            $table->integer('number');
            $table->integer('money');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dps_order_record');
    }
}
