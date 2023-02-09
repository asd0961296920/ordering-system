<?php 
class Cms6226f5327a298916526344_9d1167ec812015cd22a61fb10620da76Class extends Cms\Classes\PartialCode
{
//將歷史訂單查詢出來
public function onStart()
{
    $user = Auth::getUser();
    $apply = Db::table('dps_shopping_information')
    ->select('*')
    ->where('accountname', '=', $user->name)
    ->get();	
    foreach ($apply as $apply) {
        $serialnumber = $apply->serialnumber;
    }





    $this['posts'] = Db::table('dps_order_historicalrecord')
    ->select('*')
    ->where('username', 'like', $serialnumber)
    ->get();

    $this['tt'] = Db::table('dps_order_orderdetails')
    ->select('*')
    ->get();	



    

}
}
