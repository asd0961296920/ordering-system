<?php 
class Cms642fc707c560e303083422_a260e66214dd0d58ff42a3e4fee082d2Class extends Cms\Classes\PageCode
{
//取消按鈕,將放在購物車中的菜全部刪除
public function onFor(){
    $user = Auth::getUser();
    $usernumber = Db::table('dps_shopping_information')
    ->select('*')
    ->where('accountname', '=', $user->name)
    ->get();	
    
    foreach ($usernumber as $usernumber) {

        $ccnumber = $usernumber ->serialnumber;
    }



    Db::table('dps_shopping_commodity')->where('username', '=', $ccnumber)->delete();
   // echo '已刪除';
}

//確認下訂單按鈕,將購物車中的資料匯入訂單資料庫中,等待工作人員出貨,同時將購物車中的資料刪除
public function onFormSubmit()
{    
    

$moneyff = input('moneyff');
    $address = input('address');
  if($address != ''){

    $user = Auth::getUser();
    $usernumber = Db::table('dps_shopping_information')
    ->select('*')
    ->where('accountname', '=', $user->name)
    ->get();	
    
    foreach ($usernumber as $usernumber) {

        $ccnumber = $usernumber ->serialnumber;
    }

 
    $apply = Db::table('dps_shopping_commodity')->where('username', '=', $ccnumber)->get();

    foreach ($apply as $apply) {

$ordernumber = $apply->bentonumber;
        $money = $apply->money;
        $nature =$apply->nature;
        date_default_timezone_set("Asia/Shanghai");
$date = date("Y/m/d H:i:s");
$datedd = date("YmdHis");
$cooknames = $apply->cookname;


//訂單的詳細菜名

        Db::table('dps_order_orderdetails')->insert([
        ['id' =>$datedd,'dishid' =>  $apply->commodityname,'number'=> $apply->number,'nature'=> $nature,'ordernumber'=> $ordernumber,'chname'=> $cooknames
        
        ]
        ]);

    }
 
 //將訂單傳到後台等待處理
    Db::table('dps_order_record')->insert([
    ['username' =>$ccnumber,'address' => $address,'date'=>$date,'orderid'=>$datedd,'money'=>$moneyff
    
    ]


    ]);

    //另外儲存一份歷史紀錄
    Db::table('dps_order_historicalrecord')->insert([
    ['username' =>$ccnumber,'address' => $address,'date'=>$date,'orderid'=>$datedd,'shippingstatus'=>'未出貨'
    
    ]


    ]);
  Db::table('dps_shopping_commodity')->where('username', '=', $ccnumber)->delete();

 
 //echo '完成';

}else{

    //多的 不要理我
    echo '請輸入地址';
}

}
public function onFormSubmit2()
{   
	$datas = input('datas');
    $datas = str_replace('-','/',$datas);
	$datas = '%'.$datas.'%';

	$addresses = input('addresses');
    $addresses = '%'.$addresses.'%';

$shippingstatus = input('shippingstatus');
$shippingstatus = '%'.$shippingstatus.'%';

//	$moneyss = input('moneyss');

$user = Auth::getUser();
$apply = Db::table('dps_shopping_information')
->select('*')
->where('accountname', '=', $user->name)
->get();	
foreach ($apply as $apply) {
    $serialnumber = $apply->serialnumber;
}

$this['tt'] = Db::table('dps_order_orderdetails')
->select('*')
->get();



	$this['posts'] = Db::table('dps_order_historicalrecord')
		->select('*')
        ->where('username', 'like', $serialnumber)
		->where('date', 'like', $datas)
		->where('address', 'like', $addresses)
        ->where('shippingstatus', 'like', $shippingstatus)
		->get();	

}













//多餘的 請跳過
public function onCcdf()
{


    $user = Auth::getUser();
    $accly = Db::table('dps_shopping_information')
    ->select('*')
    ->where('accountname', '=', $user->name)
    ->get();

    foreach ($accly as $accly) {

        $frc = $accly ->serialnumber;
    }

    $ffdd = Db::table('dps_shopping_commodity')
    ->select('*')
    ->where('username', '=', $frc)
    ->get();

foreach ($ffdd as $ffdd) {
 
$rr = $ffdd->commodityname;
echo $rr;
/*  

$cw = Db::table('dps_food_cook')
    ->select('*')
    ->where('id', '=', $ffdd -> commodityname)
    ->first();
    $this['fd']= $cw -> name;
*/

}
}




//載入網頁時需要從資料庫拿的部分
public function onStart()
{

    $user = Auth::getUser();

    $this['useres'] = Db::table('dps_shopping_information')->where('accountname', '=', $user->name)->value('authority');



}
}
