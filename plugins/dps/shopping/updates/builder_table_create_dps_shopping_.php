<?php namespace Dps\Shopping\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDpsShopping extends Migration
{
    public function up()
    {
        Schema::create('dps_shopping_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('accountname');
            $table->text('cellphone');
            $table->text('address');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dps_shopping_');
    }
}
