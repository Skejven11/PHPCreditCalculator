<?php

require_once 'init.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action) {
    default:
        include_once 'app/controllers/CalcCtrl.class.php';
        $ctrl = new CalcCtrl();
        $ctrl->genView();
        break;
     case 'calcProcess':
        include_once 'app/controllers/CalcCtrl.class.php';
        $ctrl = new CalcCtrl();
        $ctrl->process();
        break;
     case 'calcHome':
        include_once 'app/controllers/HomeCtrl.class.php';
        $Hctrl = new HomeCtrl();
        $Hctrl->GenView();
        break;
}

