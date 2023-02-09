<?php namespace Dps\Order\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDpsOrderOrderdetails2 extends Migration
{
    public function up()
    {
        Schema::table('dps_order_orderdetails', function($table)
        {
            $table->text('nature');
        });
    }
    
    public function down()
    {
        Schema::table('dps_order_orderdetails', function($table)
        {
            $table->dropColumn('nature');
        });
    }
}
