<?php

namespace app\controllers;


class HomeCtrl {
    
    public function GenView(){	
	getSmarty()->display('HomeView.tpl');
    }
}
