<?php 
class Cms6226f52c7b982980183594_60d643fd20328672c216957542175895Class extends Cms\Classes\PartialCode
{
public function onStart()
{
    $user = Auth::getUser();
    if($user){
    $this['cc'] = Db::table('dps_shopping_information')
    ->select('*')
    ->where('accountname', '=', $user->name)
    ->get();	
}

    
}
}
