<?php namespace Dps\Order\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDpsOrderOrderdetails3 extends Migration
{
    public function up()
    {
        Schema::table('dps_order_orderdetails', function($table)
        {
            $table->text('ordernumber');
        });
    }
    
    public function down()
    {
        Schema::table('dps_order_orderdetails', function($table)
        {
            $table->dropColumn('ordernumber');
        });
    }
}
