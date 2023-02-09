<?php namespace Dps\Order\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDpsOrderHistoricalrecord extends Migration
{
    public function up()
    {
        Schema::table('dps_order_historicalrecord', function($table)
        {
            $table->text('nature');
        });
    }
    
    public function down()
    {
        Schema::table('dps_order_historicalrecord', function($table)
        {
            $table->dropColumn('nature');
        });
    }
}
