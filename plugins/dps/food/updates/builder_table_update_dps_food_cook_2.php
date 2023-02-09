<?php namespace Dps\Food\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDpsFoodCook2 extends Migration
{
    public function up()
    {
        Schema::table('dps_food_cook', function($table)
        {
            $table->dropColumn('address');
        });
    }
    
    public function down()
    {
        Schema::table('dps_food_cook', function($table)
        {
            $table->text('address');
        });
    }
}
