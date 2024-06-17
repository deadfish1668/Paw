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
	}

	public function validate() {
		if (! (isset ( $this->form->years ) && isset ( $this->form->cost ) && isset ( $this->form->percent ))) {
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
                        
		}
		
		return ! getMessages()->isError();
	}
	
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			$this->form->years = intval($this->form->years);
			$this->form->cost = intval($this->form->cost);
			$this->form->percent = floatval($this->form->percent);
			getMessages()->addInfo('Parametry poprawne.');
				
			
                        $this->result->result = ($this->form->cost * (1 + ($this->form->percent / 100))) / ($this->form->years * 12);
                        
			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	public function generateView(){
		
		getSmarty()->assign('page_title','Kalkulator kredytu');
		getSmarty()->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
		getSmarty()->assign('page_header','Obiekty w PHP');
				
		
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('credit_calc.tpl');
	}
}
