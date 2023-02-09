<?php namespace Dps\Food\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDpsFoodRabbits extends Migration
{
    public function up()
    {
        Schema::rename('dps_food_rabbit', 'dps_food_rabbits');
    }
    
    public function down()
    {
        Schema::rename('dps_food_rabbits', 'dps_food_rabbit');
    }
}
