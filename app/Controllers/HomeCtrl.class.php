<?php
require_once $conf->root_path.'/libs/Smarty.class.php';

class HomeCtrl {
    
    public function GenView(){	
	getSmarty()->display('HomeView.html');
    }
}
