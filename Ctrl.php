<?php

require_once 'init.php';

getConf()->login_action = 'login';

switch ($action) {
    default:
        control('app\\controllers','HomeCtrl', 'GenView',['user','admin']);
     case 'login':
        control('app\\controllers', 'LoginCtrl', 'doLogin');
     case 'logout':
        control('app\\controllers','LoginCtrl', 'doLogout',['user','admin']);
     case 'calcProcess':
        control('app\\controllers','CalcCtrl', 'Process',['user','admin']);
     case 'calcHome':
        control('app\\controllers','HomeCtrl', 'GenView',['user','admin']);
}

