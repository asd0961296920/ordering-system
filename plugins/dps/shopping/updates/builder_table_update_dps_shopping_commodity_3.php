<?php namespace Dps\Shopping\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDpsShoppingCommodity3 extends Migration
{
    public function up()
    {
        Schema::table('dps_shopping_commodity', function($table)
        {
            $table->dropColumn('date');
        });
    }
    
    public function down()
    {
        Schema::table('dps_shopping_commodity', function($table)
        {
            $table->text('date');
        });
    }
}
