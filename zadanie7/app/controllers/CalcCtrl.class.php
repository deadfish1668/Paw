<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

	private $form;
	private $result; 

	public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	public function getParams(){
		$this->form->years = getFromRequest('years');
		$this->form->cost = getFromRequest('cost');
		$this->form->percent = getFromRequest('percent');
                $this->form->tel = getFromRequest('tel');
	}

	public function validate() {
		if (! (isset ( $this->form->years ) && isset ( $this->form->cost ) && isset ( $this->form->percent ) && isset ( $this->form->tel ))) {
			return false;
		}
		
		if ($this->form->years == "") {
			getMessages()->addError('Nie podano okresu kredytowania');
		}
		if ($this->form->cost == "") {
			getMessages()->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->percent == "") {
			getMessages()->addError('Nie podano oprocentowania kredytu');
		}
                if ($this->form->tel == "") {
			getMessages()->addError('Nie podano numeru telefonu');
		}
                
		
		if (! getMessages()->isError()) {
			
			if (! is_numeric ( $this->form->years )) {
				getMessages()->addError('Okres kredytowania nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->cost )) {
				getMessages()->addError('Kwota kredytu nie jest liczbą całkowitą');
			}
                        
			if (!is_numeric ( $this->form->percent )) {
				getMessages()->addError('Oprocentowanie kredytu nie jest liczbą rzeczywistą');
			}
                        
                        if (!is_numeric ( $this->form->tel )) {
				getMessages()->addError('Numer telefonu nie jest liczbą');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	public function action_calcCompute(){

		$this->getParams();
		
		if ($this->validate()) {
				
			$this->form->years = intval($this->form->years);
			$this->form->cost = intval($this->form->cost);
			$this->form->percent = floatval($this->form->percent);
                        $this->form->tel = intval($this->form->tel);
			getMessages()->addInfo('Parametry poprawne.');
				
			if($this->form->cost > 750000 || $this->form->percent < 3.5){
                            if (inRole('admin')){
                                $this->result->result = ($this->form->cost * (1 + ($this->form->percent / 100))) / ($this->form->years * 12);   
                            } else {
                                getMessages()->addError('Tylko administrator może udzielać kredytu na tak atrakcyjnych warunkach');
                            }
                        } else {
                            $this->result->result = ($this->form->cost * (1 + ($this->form->percent / 100))) / ($this->form->years * 12);
                        }
			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
                try{
                    $database = new \Medoo\Medoo([
                        'database_type' => 'mysql',
                        'database_name' => 'calc',
                        'server' => 'localhost',
                        'username' => 'root',
                        'password' => '',
                        'charset' => 'utf8',
                        'collation' => 'utf8_polish_ci',
                        'port' => 3306,
                        'option' => [
                            \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
                            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                        ]
                    ]);
                    
                    $database->insert("wynik", [
                        "kwota" => $this->form->cost,
                        "okres" => $this->form->years,
                        "procent" => $this->form->percent,
                        "tel" => $this->form->tel,
                        "rata" => $this->result->result,
                        "data" => date("Y-m-d H:i:s")
                    ]);
                } catch (\PDOException $ex) {
                    getMessages()->addError("DB Error: ".$ex->getMessage());
                }
                
		$this->generateView();
	}
        
        public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}
	
	public function generateView(){
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));
				
		getSmarty()->assign('page_title','Super kalkulator - role');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('credit_calc.tpl');
	}
}
