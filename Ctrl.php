<?php

require_once 'init.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action) {
    default:
        $ctrl = new app\controllers\CalcCtrl();
        $ctrl->genView();
        break;
     case 'calcProcess':
        $ctrl = new app\controllers\CalcCtrl();
        $ctrl->process();
        break;
     case 'calcHome':
        $Hctrl = new app\controllers\HomeCtrl();
        $Hctrl->GenView();
        break;
}

