<?php 
class Cms64326aa552083437018727_fc1c0785f438092fdfcf2282970ec83dClass extends Cms\Classes\PageCode
{
public function onStart()
{

  
  $user = Auth::getUser();
  
  if($user){
    $this['useres'] = Db::table('dps_shopping_information')->where('accountname', '=', $user->name)->value('authority');
    }
  
  
  

}
}
