<?php namespace Dps\Order\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDpsOrderHistoricalrecord3 extends Migration
{
    public function up()
    {
        Schema::table('dps_order_historicalrecord', function($table)
        {
            $table->text('shippingstatus');
        });
    }
    
    public function down()
    {
        Schema::table('dps_order_historicalrecord', function($table)
        {
            $table->dropColumn('shippingstatus');
        });
    }
}
