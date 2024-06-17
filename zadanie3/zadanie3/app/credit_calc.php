<?php
require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'\liib\smarty\libs\Smarty.class.php';

function getParams(&$form){
    $form['years'] = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
    $form['cost'] = isset($_REQUEST['cost']) ? $_REQUEST['cost'] : null;
    $form['percent'] = isset($_REQUEST['percent']) ? $_REQUEST['percent'] : null;
}

function validate(&$form,&$infos,&$messages){
    if ( ! (isset($form['years']) && isset($form['cost']) && isset($form['percent']))) {
        return false;
    }

    $infos [] = "Przekazano parametry.";

    if ($form['years'] == "") {
    $messages [] = 'Nie podano okresu kredytowania';
    }

    if ($form['cost'] == "") {
    $messages [] = 'Nie podano kwoty kredytu';
    }

    if ($form['percent'] == "") {
    $messages [] = 'Nie podano oprocentowania kredytu';
    }

    if(count ($messages) != 0) return false;

    if (! is_numeric($form['years'])) {
        $messages [] = 'Okres kredytowania nie jest liczbą całkowitą';
    }

    if (! is_numeric($form['cost'])) {
        $messages [] = 'Kwota kredytu nie jest liczbą całkowitą';
    }

    if (! is_numeric($form['percent'])) {
        $messages [] = 'Oprocentowanie kredytu nie jest liczbą rzeczywistą';
    }

    if(count ($messages) != 0) return false;
    else return true;
}

function process(&$form,&$infos,&$messages,&$result){
    $infos [] = "Parametry poprawne. Wykonuję obliczenia.";
    
    $form['years'] = intval($form['years']);
    $form['cost'] = intval($form['cost']);
    $form['percent'] = floatval($form['percent']);

    $result = ($form['cost'] * (1 + ($form['percent'] / 100))) / ($form['years'] * 12);
}

$form = null;
$infos = array();
$result = null;
$messages = array();

getParams($form);
if ( validate($form,$infos,$messages) ) {
    process($form, $infos, $messages, $result);
}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytur');

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('infos',$infos);
$smarty->assign('messages',$messages);

$smarty->display(_ROOT_PATH.'/app/credit_calc.tpl');