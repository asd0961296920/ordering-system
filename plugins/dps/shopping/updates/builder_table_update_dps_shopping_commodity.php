<?php namespace Dps\Shopping\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDpsShoppingCommodity extends Migration
{
    public function up()
    {
        Schema::table('dps_shopping_commodity', function($table)
        {
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('dps_shopping_commodity', function($table)
        {
            $table->dropColumn('id');
        });
    }
}
