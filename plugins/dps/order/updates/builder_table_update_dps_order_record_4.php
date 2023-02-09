<?php namespace Dps\Order\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDpsOrderRecord4 extends Migration
{
    public function up()
    {
        Schema::table('dps_order_record', function($table)
        {
            $table->dropColumn('number');
            $table->dropColumn('money');
            $table->dropColumn('nature');
        });
    }
    
    public function down()
    {
        Schema::table('dps_order_record', function($table)
        {
            $table->integer('number');
            $table->integer('money');
            $table->text('nature');
        });
    }
}
