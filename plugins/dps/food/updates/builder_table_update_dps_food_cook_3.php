<?php namespace Dps\Food\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDpsFoodCook3 extends Migration
{
    public function up()
    {
        Schema::table('dps_food_cook', function($table)
        {
            $table->text('type');
        });
    }
    
    public function down()
    {
        Schema::table('dps_food_cook', function($table)
        {
            $table->dropColumn('type');
        });
    }
}
