<?php

namespace app\controllers;

use PDOException;

class ResultCtrl {

    private $records; //rekordy pobrane z bazy danych



    public function action_result(){
        try{
            $this->records = getDB()->select("dane", [
                "id_kredyt",
                "kwota",
                "lata",
                "procent",
                "miesieczna_rata",
                "data"
            ]);
        } catch (PDOException $e){
            getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
            if (getConf()->debug) getMessages()->addError($e->getMessage());
        }

        getSmarty()->assign('result',$this->records);
        getSmarty()->assign('page_title','Kredyty');
        getSmarty()->assign('page_description','Kredyty znajdują się poniżej');
        getSmarty()->assign('page_header','Strona z kredytami');
        getSmarty()->display('ResultView.tpl');
    }

}
