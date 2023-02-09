<?php 
class Cms622709dcb085c610374265_ed4018fbbb41b484908587a5a34a12a0Class extends Cms\Classes\PageCode
{
//會員自己要添加或修改自己資料的部分
public function onFccc()
{


    $user = Auth::getUser();

    $usernumber = Db::table('dps_shopping_information')
    ->select('*')
    ->where('accountname', '=', $user->name)
    ->get();	

//將前端匯入後端
$cellphone = input('cellphone');
$add = input('add');
$old = input('old');
$blood = input('blood');
$gender = input('gender');
$threehigh = input('threehigh');

$diabetes = input('diabetes');
$tell = input('tell');
$high = input('high');



foreach ($usernumber as $usernumber) {

    $ccnumber = $usernumber ->serialnumber;
}

//將資料放入資料庫
Db::table('dps_shopping_information')
->where('accountname', $user->name)
->update(['cellphone' => $cellphone ,'address' => $add ,'old' => $old ,'blood' => $blood,'gender' => $gender]);

//echo '完成';


}
public function onFcccc()
{
  
  $user = Auth::getUser();

  $usernumber = Db::table('dps_shopping_information')
  ->select('*')
  ->where('accountname', '=', $user->name)
  ->get();	

//將前端匯入後端

$threehigh = input('threehigh');

$diabetes = input('diabetes');
$tell = input('tell');
$high = input('high');



foreach ($usernumber as $usernumber) {

  $ccnumber = $usernumber ->serialnumber;
}

//將資料放入資料庫
Db::table('dps_shopping_information')
->where('accountname', $user->name)
->update(['threehigh' => $threehigh,'diabetes' => $diabetes,'tell' => $tell,'high' => $high]);

//echo '完成';

}
public function onStart()
{
  $user = Auth::getUser();
if($user){
$this['useres'] = Db::table('dps_shopping_information')->where('accountname', '=', $user->name)->value('authority');



$this['cccd'] = Db::table('dps_shopping_information')
->select('*')
->where('accountname', '=', $user->name)
->get();	




}
  
  
  
                          

}
}
