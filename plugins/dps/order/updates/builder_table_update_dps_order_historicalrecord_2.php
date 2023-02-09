<?php namespace Dps\Order\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDpsOrderHistoricalrecord2 extends Migration
{
    public function up()
    {
        Schema::table('dps_order_historicalrecord', function($table)
        {
            $table->text('orderid');
            $table->dropColumn('cookname');
            $table->dropColumn('number');
            $table->dropColumn('money');
            $table->dropColumn('nature');
        });
    }
    
    public function down()
    {
        Schema::table('dps_order_historicalrecord', function($table)
        {
            $table->dropColumn('orderid');
            $table->text('cookname');
            $table->integer('number');
            $table->integer('money');
            $table->text('nature');
        });
    }
}
