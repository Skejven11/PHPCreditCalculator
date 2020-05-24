<?php
require_once $conf->root_path.'/libs/Smarty.class.php';

class HomeCtrl {
    
    public function GenView(){
        global $conf;
        
        $smarty = new Smarty();
		
	$smarty->display($conf->root_path.'/app/Loans/HomeView.html');
    }
}
