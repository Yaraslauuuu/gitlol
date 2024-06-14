<?php namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

    private $form;   //dane formularza
    private $result; //dane wyliczone z danych z form

    public function __construct(){

        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParams(){
        $this->form->amount = getFromRequest('amount');
        $this->form->years = getFromRequest('years');
        $this->form->percent = getFromRequest('percent');
    }

    public function validate() {
        // walidacja
        if (! (isset ( $this->form->amount ) && isset ( $this->form->years ) && isset ( $this->form->percent ))) {
            return false;
        }

        if ($this->form->amount == "") {
            getMessages()->addError('Nie podano kwoty');
        }
        if ($this->form->years == "") {
            getMessages()->addError('Nie podano liczby lat');
        }
        if ($this->form->percent == "") {
            getMessages()->addError('Nie podano oprocentowania');
        }

        if (! getMessages()->isError()) {

            if (! is_numeric ( $this->form->amount )) {
                getMessages()->addError('Kwota nie jest liczbą całkowitą');
            }
            if (! is_numeric ( $this->form->years )) {
                getMessages()->addError('Liczba lat nie jest liczbą całkowitą');
            }
            if (! is_numeric ( $this->form->percent )) {
                getMessages()->addError('Oprocentowanie nie jest liczbą całkowitą');
            }
        }

        if(!getMessages()->isError()){
            if($this->form->amount<=0){
                getMessages()->addError('Kwota musi być wieksza od 0');
            }
            if($this->form->percent<=0){
                getMessages()>addError('Oprocentowanie musi być większe od 0');
            }
            if($this->form->years<=0){
                getMessages()->addError('Liczba lat musi być większa od 0');
            }
        }

        return ! getMessages()->isError();
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


        getSmarty()->assign('page_title','Kalkulator kredytowy');
        getSmarty()->assign('page_description','Aplikacja z jednym "punktem wejścia". Zmiana w postaci nowej struktury foderów, skryptu inicjalizacji oraz pomocniczych funkcji. Użycie automatycznego ładowania klas dzięki ClassLoader.');
        getSmarty()->assign('page_header','Kontroler główny');


        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('res',$this->result);

        getSmarty()->display('CalcView.tpl');
    }
}