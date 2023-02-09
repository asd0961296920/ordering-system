<?php namespace Dps\Shopping\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDpsShoppingInformation3 extends Migration
{
    public function up()
    {
        Schema::table('dps_shopping_information', function($table)
        {
            $table->text('serialnumber')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('dps_shopping_information', function($table)
        {
            $table->integer('serialnumber')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
