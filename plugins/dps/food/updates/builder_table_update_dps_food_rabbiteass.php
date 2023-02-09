<?php namespace Dps\Food\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDpsFoodRabbiteass extends Migration
{
    public function up()
    {
        Schema::rename('dps_food_rabbitess', 'dps_food_rabbiteass');
    }
    
    public function down()
    {
        Schema::rename('dps_food_rabbiteass', 'dps_food_rabbitess');
    }
}
