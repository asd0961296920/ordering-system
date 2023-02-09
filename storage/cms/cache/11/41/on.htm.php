<?php 
use RainLab\User\Facades\Auth;use October\Rain\Database\ModelException;class Cms6226f52d0f031720825657_5706161892bcfb3af03b321d5929a03aClass extends Cms\Classes\PageCode
{


public function onStart()
{

}
public function onFormSubmit()
{
	// 確認帳號密碼是否正確,不正確回答不正確
	Event::listen('rainlab.user.login', function($user) {
		// print($user);
		$this['have_login'] = true;
	});

    $account = input('account');
	$password = input('password');

	try{
		$user = Auth::authenticate([
			'login' => $account,
			'password' => $password
		]);
	}
	catch(\October\Rain\Auth\AuthException $ex){
		$this['have_login'] = false;
	}
}
}
