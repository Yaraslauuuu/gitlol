<?php
require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

function getParams(&$amount,&$years,&$percent){
    $amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
    $years= isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
    $percent = isset($_REQUEST['percent']) ? $_REQUEST['percent'] : null;
}

function validate(&$amount,&$years,&$percent,&$messages){

    if ( ! (isset($amount) && isset($years) && isset($percent))) {
        return false;
    }

    if ( $amount == "") {
        $messages [] = 'Nie podano kwoty';
    }
    if ( $years == "") {
        $messages [] = 'Nie podano liczby lat';
    }
    if ( $percent == "") {
        $messages [] = 'Nie podano oprocentowania';
    }
    if (count ( $messages ) != 0) return false;

    if (! is_numeric( $amount )) {
        $messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
    }

    if (! is_numeric( $years )) {
        $messages [] = 'Druga wartość nie jest liczbą całkowitą';
    }
    if (! is_numeric( $percent )) {
        $messages [] = 'Druga wartość nie jest liczbą całkowitą';
    }

    if (count ( $messages ) != 0) return false;
    else return true;
}
function process($amount, $years, $percent, &$messages) {

    $monthlyInterestRate = ($percent / 100) / 12;
    $numberOfPayments = $years * 12;

    //result
    $monthlyPayment = ($amount * $monthlyInterestRate) / (1 - pow(1 + $monthlyInterestRate, -$numberOfPayments));

    return round($monthlyPayment, 2);
}

$amount = null;
$years = null;
$percent = null;
$result = null;
$messages = array();

getParams($amount,$years,$percent);

if ( validate($amount,$years,$percent,$messages) ) {
    $result = process($amount, $years, $percent, $messages);
}
//echo "Amount: ";
//var_dump($amount);
//echo "Years: ";
//var_dump($years);
//echo "Percent: ";
//var_dump($percent);

//szablonowanie smarty
$smarty = new Smarty();
$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','MW Kalkulator kredytowy');
$smarty->assign('page_description','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nulla leo, molestie nec sodales ac, euismod sed magna.');
$smarty->assign('page_header','kalkulator kredytowy');

$smarty->assign('result',$result);
$smarty->assign('messages',$messages);

$smarty->display(_ROOT_PATH.'/app/calc.tpl');