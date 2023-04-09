<?php 
use dps\food\models\Cook;class Cms643106be7044d423113963_e0c2c81c4c8977163a507f07c0556b58Class extends Cms\Classes\PartialCode
{

//從資料庫查詢有哪些菜
public function onStart()
{
$this['posts'] = Db::table('dps_food_cook')
    ->select('*')
    ->get();	
}
}
