<?php 
use RainLab\User\Facades\Auth;use October\Rain\Database\ModelException;class Cms642fd000a609f705258970_dfdb4f71353ed550b7d9c57f3db6c6b9Class extends Cms\Classes\PageCode
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
