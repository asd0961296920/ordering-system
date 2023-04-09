<?php 
class Cms642fc88129c33542534503_01d2d4c3b552777c947e784499505311Class extends Cms\Classes\PartialCode
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
