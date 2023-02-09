<?php namespace Dps\Food\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDpsFoodRabbitess extends Migration
{
    public function up()
    {
        Schema::rename('dps_food_rabbits', 'dps_food_rabbitess');
    }
    
    public function down()
    {
        Schema::rename('dps_food_rabbitess', 'dps_food_rabbits');
    }
}
