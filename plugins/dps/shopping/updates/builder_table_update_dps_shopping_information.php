<?php namespace Dps\Shopping\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDpsShoppingInformation extends Migration
{
    public function up()
    {
        Schema::rename('dps_shopping_', 'dps_shopping_information');
    }
    
    public function down()
    {
        Schema::rename('dps_shopping_information', 'dps_shopping_');
    }
}
