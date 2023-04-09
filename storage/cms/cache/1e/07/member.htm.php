<?php 
class Cms6431080a360c0198760203_f617a356e23296b6ab0ba70d5f391a66Class extends Cms\Classes\PartialCode
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
