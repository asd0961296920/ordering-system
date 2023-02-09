<?php namespace Dps\Shopping\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDpsShoppingStoredvalue extends Migration
{
    public function up()
    {
        Schema::create('dps_shopping_storedvalue', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
            $table->text('amount');
            $table->text('liangdao');
            $table->text('data');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dps_shopping_storedvalue');
    }
}
