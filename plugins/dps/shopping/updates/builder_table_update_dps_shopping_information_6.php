<?php namespace Dps\Shopping\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDpsShoppingInformation6 extends Migration
{
    public function up()
    {
        Schema::table('dps_shopping_information', function($table)
        {
            $table->text('gender');
            $table->text('threehigh');
        });
    }
    
    public function down()
    {
        Schema::table('dps_shopping_information', function($table)
        {
            $table->dropColumn('gender');
            $table->dropColumn('threehigh');
        });
    }
}
