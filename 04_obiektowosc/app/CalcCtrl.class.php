<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl {

    private $msgs;   //komunikaty
    private $form;   //dane formularza
    private $result; //dane wyliczone z danych z form

    public function __construct(){

        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParams(){
        $this->form->amount = isset($_REQUEST ['amount']) ? $_REQUEST ['amount'] : null;
        $this->form->years = isset($_REQUEST ['years']) ? $_REQUEST ['years'] : null;
        $this->form->percent = isset($_REQUEST ['percent']) ? $_REQUEST ['percent'] : null;
    }

    public function validate() {
        // walidacja
        if (! (isset ( $this->form->amount ) && isset ( $this->form->years ) && isset ( $this->form->percent ))) {
            return false;
        }

        if ($this->form->amount == "") {
            $this->msgs->addError('Nie podano kwoty');
        }
        if ($this->form->years == "") {
            $this->msgs->addError('Nie podano liczby lat');
        }
        if ($this->form->percent == "") {
            $this->msgs->addError('Nie podano oprocentowania');
        }

        if (! $this->msgs->isError()) {

            if (! is_numeric ( $this->form->amount )) {
                $this->msgs->addError('Kwota nie jest liczbą całkowitą');
            }
            if (! is_numeric ( $this->form->years )) {
                $this->msgs->addError('Liczba lat nie jest liczbą całkowitą');
            }
            if (! is_numeric ( $this->form->percent )) {
                $this->msgs->addError('Oprocentowanie nie jest liczbą całkowitą');
            }
        }

        if(!$this->msgs->isError()){
            if($this->form->amount<=0){
                $this->msgs->addError('Kwota musi być wieksza od 0');
            }
            if($this->form->percent<=0){
                $this->msgs->addError('Oprocentowanie musi być większe od 0');
            }
            if($this->form->years<=0){
                $this->msgs->addError('Liczba lat musi być większa od 0');
            }
        }

        return ! $this->msgs->isError();
    }

    public function process(){

        $this->getparams();

        if ($this->validate()) {

            $this->form->amount = intval($this->form->amount);
            $this->form->years = intval($this->form->years);
            $this->form->percent = intval($this->form->percent);

            $this->result->monthlyInterestRate = ($this->form->percent / 100) / 12;
            $this->result->numberOfPayments = $this->form->years * 12;

            $this->result->monthlyPayment = ($this->form->amount * $this->result->monthlyInterestRate) / (1 - pow(1 + $this->result->monthlyInterestRate, -$this->result->numberOfPayments));
        }

        $this->generateView();
    }

    public function generateView(){
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf',$conf);

        $smarty->assign('page_title','Kalkulator kredytowy');
        $smarty->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
        $smarty->assign('page_header','Obiektowość w PHP');


        $smarty->assign('msgs',$this->msgs);
        $smarty->assign('form',$this->form);
        $smarty->assign('res',$this->result);

        $smarty->display($conf->root_path.'/app/CalcView.tpl');
    }
}