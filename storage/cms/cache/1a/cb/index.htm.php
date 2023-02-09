<?php 
class Cms6226f528cea4c787318846_af9270368cdccd43e04d3d2773d0c2a2Class extends Cms\Classes\PageCode
{
public function onStart()
{
  $user = Auth::getUser();
if($user){
$this['useres'] = Db::table('dps_shopping_information')->where('accountname', '=', $user->name)->value('authority');
}
  
  
  
                          

}
}
