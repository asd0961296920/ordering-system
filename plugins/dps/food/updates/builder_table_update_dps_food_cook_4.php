<?php namespace Dps\Food\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDpsFoodCook4 extends Migration
{
    public function up()
    {
        Schema::table('dps_food_cook', function($table)
        {
            $table->integer('starch');
            $table->integer('sugar');
        });
    }
    
    public function down()
    {
        Schema::table('dps_food_cook', function($table)
        {
            $table->dropColumn('starch');
            $table->dropColumn('sugar');
        });
    }
}
