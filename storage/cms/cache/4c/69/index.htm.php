<?php 
class Cms642fd01545775427193299_9159afcde39591e7004646ee1500a8dcClass extends Cms\Classes\PageCode
{
public function onStart()
{
  $user = Auth::getUser();
if($user){
$this['useres'] = Db::table('dps_shopping_information')->where('accountname', '=', $user->name)->value('authority');
}
  
  
  
                          

}
}
