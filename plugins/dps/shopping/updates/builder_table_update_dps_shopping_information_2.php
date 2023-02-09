<?php namespace Dps\Shopping\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDpsShoppingInformation2 extends Migration
{
    public function up()
    {
        Schema::table('dps_shopping_information', function($table)
        {
            $table->integer('serialnumber');
        });
    }
    
    public function down()
    {
        Schema::table('dps_shopping_information', function($table)
        {
            $table->dropColumn('serialnumber');
        });
    }
}
