<?php 
class Cms62270b3e54857430882879_75eb438f74024131b4b63b047f5f5009Class extends Cms\Classes\PartialCode
{
//列出購物車裡面有什麼
public function onStart()
{
    $user = Auth::getUser();
    $accly = Db::table('dps_shopping_information')
    ->select('*')
    ->where('accountname', '=', $user->name)
    ->get();
    $this['user'] = Db::table('dps_shopping_information')->where('accountname', '=', $user->name)->value('authority');
    $this['cn'] = '';


    foreach ($accly as $accly) {

//查詢購物車
        //單點查詢

    $this['posts'] = Db::table('dps_shopping_commodity')
    ->select('*')
    ->where('username', '=', $accly ->serialnumber)
    ->where('nature', '=', '單點')
    ->get();
        //便當查詢
        $this['ptt'] = Db::table('dps_shopping_commodity')
        ->select('*')
        ->where('username', '=', $accly ->serialnumber)
        ->where('nature', '=', '便當')
        ->get();
       
        $this['wer'] = Db::table('dps_shopping_commodity')
        ->select('bentonumber')
        ->distinct()
        ->where('username', '=', $accly ->serialnumber)
        ->get();



$cd = $accly ->serialnumber;




     $ffdd = Db::table('dps_shopping_commodity')
     ->select('*')
     ->where('username', '=', $accly ->serialnumber)
     ->get();
     $eee = Db::table('dps_shopping_commodity')
     ->select('*')
     ->where('username', '=', $accly ->serialnumber)
     ->where('bentonumber', '<>', '')
     ->get();

    //查詢地址
    $this['cc'] = Db::table('dps_shopping_information')
    ->select('*')
    ->where('serialnumber', '=', $accly ->serialnumber)
    ->get();	
 

}

$ww = 0;

// 價格統計
foreach ($ffdd as $ffdd) {
$ww = $ww +  $ffdd->money;

}
$ddd = '';
$dddd= 0;
foreach ($eee as $eee) {
if($dddd == 0){
    $ww = $ww +  60;
    $dddd= 1;
    $ddd2 = $eee->bentonumber;

}else{

if($ddd != $eee->bentonumber && $ddd !=$ddd2){
    $ww = $ww +  60;


}
}
$ddd = $eee->bentonumber;




    
    }



$this['ff'] = $ww; 





//健康食物

$wq = Db::table('dps_shopping_information')
->select('*')
->where('serialnumber', '=', $cd)
->get();


foreach ($wq as $wq) {

$gorb = $wq->gender;


}
$oot = 0;
$ffcs = Db::table('dps_shopping_commodity')
->select('*')
->where('username', '=', $cd)
->get();
foreach ($ffcs as $ffcs) {


    $oo = Db::table('dps_food_cook')->where('id', '=', $ffcs->commodityname)->value('cc');

$oot +=$oo;

    
    }



if($gorb == ''){

    $this['vv'] = '正常健康'; 




}else if($oot >= 200 && $gorb == '女'){
    $this['vv'] = '熱量過高'; 





}else if($oot < 200 && $gorb == '女'){
    $this['vv'] = '熱量適中'; 





}else if($oot >= 500 && $gorb == '男'){
    $this['vv'] = '熱量過高'; 





}else if($oot < 500 && $gorb == '男'){
    $this['vv'] = '熱量適中'; 





}else if($oot >= 1000 && $gorb == '雙性人'){
    $this['vv'] = '熱量過高'; 





}else if($oot < 1000 && $gorb == '雙性人'){
    $this['vv'] = '熱量適中'; 





}






}
}
