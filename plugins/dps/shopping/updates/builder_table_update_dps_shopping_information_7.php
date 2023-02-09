<?php namespace Dps\Shopping\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDpsShoppingInformation7 extends Migration
{
    public function up()
    {
        Schema::table('dps_shopping_information', function($table)
        {
            $table->text('diabetes');
            $table->text('tell');
            $table->text('high');
        });
    }
    
    public function down()
    {
        Schema::table('dps_shopping_information', function($table)
        {
            $table->dropColumn('diabetes');
            $table->dropColumn('tell');
            $table->dropColumn('high');
        });
    }
}
