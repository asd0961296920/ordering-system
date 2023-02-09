<?php namespace Dps\Order\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDpsOrderRecord7 extends Migration
{
    public function up()
    {
        Schema::table('dps_order_record', function($table)
        {
            $table->integer('money');
        });
    }
    
    public function down()
    {
        Schema::table('dps_order_record', function($table)
        {
            $table->dropColumn('money');
        });
    }
}
