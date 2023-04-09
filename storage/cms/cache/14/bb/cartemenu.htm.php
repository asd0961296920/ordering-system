<?php 
class Cms643106bd5856a957352429_fa61fd0e76fed333166c9539b0ff1603Class extends Cms\Classes\PageCode
{
//單點的部分
public function onFormSubmit()
{
    $loggedIn = Auth::check();
    $user = Auth::getUser();
    if($loggedIn==true){
        $apply = Db::table('dps_shopping_information')
        ->select('*')
        ->where('accountname', '=', $user->name)
        ->get();
 
        foreach ($apply as $apply) {

            $cookname = input('cookname');
            $pets = input('pets');
            $money = input('money');
            $moneys=$money*$pets;
            $bentonumber = 0;
            $namefood = input('namefood');


        }   

       //將確認的資料匯入資料庫
        Db::table('dps_shopping_commodity')->insert([
        ['commodityname' => $cookname,'number' => $pets,'money' => $moneys,'username' => $apply ->serialnumber ,'nature' => '單點','bentonumber' => $bentonumber,'cookname' => $namefood]
        
    ]);


//js特效


$this['fc'] = true;


    }else{
        

		$this['have_login'] = false;

    }


}
//便當的部分
public function onFonvenient()
{
    //便當
    $loggedIn = Auth::check();
    if($loggedIn==true){

        $pets=1;
        $moneys= 0;
        $user = Auth::getUser();
        $postedtags = $_POST['CCC'];
        $bbb = '';


$usernumber = Db::table('dps_shopping_information')
->select('*')
->where('accountname', '=', $user->name)
->get();	

foreach ($usernumber as $usernumber) {

    $ccnumber = $usernumber ->serialnumber;
}

$dateee = date("mdHis");

//放入數據庫
foreach ($postedtags as $CCC){


$cooknamess = Db::table('dps_food_cook')->where('id', '=',$CCC)->value('name');


Db::table('dps_shopping_commodity')->insert([
['commodityname' => $CCC,'number' => $pets,'money' => $moneys,'username' => $ccnumber ,'nature' => '便當','bentonumber' => $dateee,'cookname'=> $cooknamess]
]);



}



$fcer = input('fcer');
$rre1= Db::table('dps_food_cook')->where('id', '=',$fcer)->value('name');





$fvt = input('fvt');
$rre2 = Db::table('dps_food_cook')->where('id', '=',$fvt)->value('name');

Db::table('dps_shopping_commodity')->insert([
['commodityname' => $fcer,'number' => $pets,'money' => $moneys,'username' => $ccnumber ,'nature' => '便當','bentonumber' => $dateee,'cookname'=> $rre1]
]);

Db::table('dps_shopping_commodity')->insert([
['commodityname' => $fvt,'number' => $pets,'money' => $moneys,'username' => $ccnumber ,'nature' => '便當','bentonumber' => $dateee,'cookname'=> $rre2]
]);





//echo '完成';


    }else{
        

		$this['have_login'] = false;

    }
}
public function onStart()
{

    $user = Auth::getUser();

    if($user){
        $this['useres'] = Db::table('dps_shopping_information')->where('accountname', '=', $user->name)->value('authority');
        }


}
}
