<?php

namespace app\controllers;

use app\transfer\User;
use app\forms\LoginForm;

class LoginCtrl{
	private $form;
	
	public function __construct(){
		$this->form = new LoginForm();
	}
	
	public function getParams(){
		$this->form->login = getFromRequest('login');
		$this->form->pass = getFromRequest('pass');
	}
	
	public function validate() {
		if (! (isset ( $this->form->login ) && isset ( $this->form->pass ))) {
			return false;
		}
			
		if (! getMessages()->isError ()) {
			
			if ($this->form->login == "") {
				getMessages()->addError ( 'Login not provided' );
			}
			if ($this->form->pass == "") {
				getMessages()->addError ( 'Password not provided' );
			}
		}

		if ( !getMessages()->isError() ) {
		
			if ($this->form->login == "admin" && $this->form->pass == "admin") {

				$user = new User($this->form->login, 'admin');
				$_SESSION['user'] = serialize($user);
				addRole($user->role);

			} else if ($this->form->login == "user" && $this->form->pass == "user") {

				$user = new User($this->form->login, 'user');
				$_SESSION['user'] = serialize($user);
				addRole($user->role);

			} else {
				getMessages()->addError('Incorrect login or password');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	public function doLogin(){

		$this->getParams();
		
		if ($this->validate()){
			header("Location: ".getConf()->app_url."/");
		} else {
			$this->genView(); 
		}
		
	}
	
	public function doLogout(){
		session_destroy();
		
		getMessages()->addInfo('You have logout of the system');

		$this->genView();		 
	}
	
	public function genView(){
		
		getSmarty()->assign('form',$this->form);
		getSmarty()->display('LoginView.tpl');		
	}
}