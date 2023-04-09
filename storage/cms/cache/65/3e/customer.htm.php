<?php 
class Cms643261840cbfd182643828_008b55cc6ec6b7f00025440cc35e6511Class extends Cms\Classes\PageCode
{
public function onFormSubmit()
{
    $Text1 = $_POST["Text1"];

//查詢輸入跟資料庫的資料有無相同
    $apply = Db::table('dps_food_rabbiteass')
    ->select('*')
    ->where('problem', 'like', $Text1)
    ->get();	

    foreach ($apply as $apply) {
        return $apply->reply;
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
