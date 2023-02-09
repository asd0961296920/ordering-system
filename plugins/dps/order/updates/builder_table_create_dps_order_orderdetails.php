<?php namespace Dps\Order\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDpsOrderOrderdetails extends Migration
{
    public function up()
    {
        Schema::create('dps_order_orderdetails', function($table)
        {
            $table->engine = 'InnoDB';
            $table->text('id');
            $table->text('dishid');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dps_order_orderdetails');
    }
}
