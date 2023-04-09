<?php 
use dps\food\models\Cook;class Cms643106be536d0572476258_733d97aa2cf376afc0ab739761442d7bClass extends Cms\Classes\PartialCode
{

public function onStart()
{
$this['posts'] = Db::table('dps_food_cook')
    ->select('*')
    ->get();	
}
}
