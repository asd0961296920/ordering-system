<?php 
use Dps\Food\Models\Cook;class Cms622707ededa4b545498333_afe1a45132ec1bc0c2acbd6aac73c3d7Class extends Cms\Classes\PageCode
{

public function onFormSubmit(){


    $postedtags = $_POST['xx'];

foreach ($postedtags as $xx){

  $ry = Db::table('dps_order_record')->where('id', '=', $xx)->value('orderid');

    Db::table('dps_order_historicalrecord')
    ->where('orderid', '=', $ry)
    ->update(['shippingstatus' => '已出貨，請到指定地點領取']);
    
    Db::table('dps_order_record')->where('id', '=', $xx)->delete();
}
  echo '完成';          

}
//顯示資料庫中的資料
public function onStart()
{
    $this['posts']= Db::table('dps_order_record')
    ->distinct()
    ->lists('username');
    
    $this['pt']= Db::table('dps_order_record')
        ->select('*')
        ->get();

        $this['pss'] = Db::table('dps_order_historicalrecord')
        ->select('*')
        ->get();	

        $this['psser'] = Db::table('dps_food_cook')
        ->select('*')
        ->get();	




          $this['tt'] = Db::table('dps_order_orderdetails')
          ->select('*')
          ->get();	


          $user = Auth::getUser();

          $this['usered']= Db::table('dps_shopping_information')->where('accountname', '=', $user->name)->value('authority');


          
              $this['useres'] = Db::table('dps_shopping_information')->where('accountname', '=', $user->name)->value('authority');
          
          
          
          


}
//上傳圖片資料
public function onFormSubmiteeting()
{
  $model = new Cook;

  $model->name = input('cooknames');

  $model->money = input('moneyes');

  $model->cc = input('kkkkg');
  $model->imager = input('jpgname');
  $model->type = input('type');
  $model->save();

echo '上傳成功!';







  /*
  //這部分做不出來QAQ
  //將圖片匯入資料庫
  $model = new Cook;

  $file  = new System\Models\File;

  $file->data = Input::file('myfile');
  $file->save();


//$model->files = Input::file('myfile');
$model->files()->add($file); 


$this['save_result'] = $model->save();



echo '完成';

//測試圖片有沒有進去

$model = Cook::find(28);


$this['apply_file_path']= $model->imgager->getPath();
*/


}
public function onFormSubmit2()
{   
	$datas = input('datas');
    $datas = str_replace('-','/',$datas);
	$datas = '%'.$datas.'%';
$texxtt = input('texxtt');
$texxtt = '%'.$texxtt.'%';
	$addresses = input('addresses');
    $addresses = '%'.$addresses.'%';

$shippingstatus = input('shippingstatus');
$shippingstatus = '%'.$shippingstatus.'%';

//	$moneyss = input('moneyss');



$this['psser'] = Db::table('dps_food_cook')
->select('*')
->get();	




  $this['tt'] = Db::table('dps_order_orderdetails')
  ->select('*')
  ->get();	



	$this['pss'] = Db::table('dps_order_historicalrecord')
		->select('*')
		->where('date', 'like', $datas)
		->where('address', 'like', $addresses)
        ->where('shippingstatus', 'like', $shippingstatus)
        ->where('username', 'like', $texxtt)
		->get();	

}
}
