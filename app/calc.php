<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/libs/Smarty.class.php';


function getParams(&$form){
	$form['val'] = isset($_REQUEST['val']) ? $_REQUEST['val'] : null;
	$form['ye'] = isset($_REQUEST['ye']) ? $_REQUEST['ye'] : null;
	$form['in'] = isset($_REQUEST['in']) ? $_REQUEST['in'] : null;	
}

function validate(&$form,$infos,&$messages){	
	
	if ( ! (isset($form['val']) && isset($form['ye']) && isset($form['in']) ))	return false;
	
	$infos [] = 'Przekazano parametry.';

	if ( $form['val'] == "") $messages [] = 'Nie podano liczby 1';
	if ( $form['ye'] == "") $messages [] = 'Nie podano liczby 2';
	
	if ( count($messages)==0 ) {
		if (! is_numeric( $form['val'] )) $messages [] = 'Pierwsza wartość nie jest liczbą';
		if (! is_numeric( $form['ye'] )) $messages [] = 'Druga wartość nie jest liczbą';
	}
	
	if (count($messages)>0) return false;
	else return true;
}

function process(&$form,&$infos,&$messages,&$result){
	$ye_temp;
	
	$form['val'] = floatval($form['val']);
	$form['ye'] = floatval($form['ye']);
	
	$ye_temp = $form['ye']*12;
	$result = $form['val']/$ye_temp+$form['val']*$form['in']/$ye_temp;
	
}

$form = null;
$infos = array();
$messages = array();
$result = null;

getParams($form);
if ( validate($form,$infos,$messages) ){
	process($form,$infos,$messages,$result);
}
$smarty = new Smarty();
$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

$smarty->display(_ROOT_PATH.'/app/calc_view.html');