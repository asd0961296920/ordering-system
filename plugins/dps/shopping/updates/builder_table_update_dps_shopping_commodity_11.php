<?php namespace Dps\Shopping\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDpsShoppingCommodity11 extends Migration
{
    public function up()
    {
        Schema::table('dps_shopping_commodity', function($table)
        {
            $table->text('cookname');
        });
    }
    
    public function down()
    {
        Schema::table('dps_shopping_commodity', function($table)
        {
            $table->dropColumn('cookname');
        });
    }
}
