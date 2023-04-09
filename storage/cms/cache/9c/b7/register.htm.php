<?php 
class Cms642fca3fa73d8800017683_c2cffb5aa968749b73353c7dd75362ddClass extends Cms\Classes\PageCode
{
//註冊新帳號
public function onFormSubmit()
{   //將前端資料匯入
    $account = input('account');
    $email = input('email');
    $cellphone =input('cellphone');
    $password = input('password');
    $address = input('address');
    $serialnumber = date("YmdHis");
    $this['account1'] = false;

    if($account == ''){

		$this['account1'] = false;

    }else if($email == ''){

		$this['account1'] = false;

    }else if($password == ''){

		$this['account1'] = false;

    }else{
        $this['account1'] = true;


//新增一個新帳號
    $user = Auth::register([
    'name' => $account,
    'email' => $email,
    'password' => $password,
    'password_confirmation' => $password,
], true);

Db::table('dps_shopping_information')->insert([
['accountname' => $account,'cellphone' => $cellphone,'address' => $address,'serialnumber'=> $serialnumber]


]);


//echo '完成';



}

}
}
