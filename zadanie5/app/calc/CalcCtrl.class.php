<?php

require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';


class CalcCtrl {

	private $messages;
	private $form;
	private $result; 

	public function __construct(){
		$this->messages = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	public function getParams(){
		$this->form->years = isset($_REQUEST ['years']) ? $_REQUEST ['years'] : null;
		$this->form->cost = isset($_REQUEST ['cost']) ? $_REQUEST ['cost'] : null;
		$this->form->percent = isset($_REQUEST ['percent']) ? $_REQUEST ['percent'] : null;
	}

	public function validate() {
		if (! (isset ( $this->form->years ) && isset ( $this->form->cost ) && isset ( $this->form->percent ))) {
			return false;
		}
		
		if ($this->form->years == "") {
			$this->messages->addError('Nie podano okresu kredytowania');
		}
		if ($this->form->cost == "") {
			$this->messages->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->percent == "") {
			$this->messages->addError('Nie podano oprocentowania kredytu');
		}
                
		
		if (! $this->messages->isError()) {
			
			if (! is_numeric ( $this->form->years )) {
				$this->messages->addError('Okres kredytowania nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->cost )) {
				$this->messages->addError('Kwota kredytu nie jest liczbą całkowitą');
			}
                        
			if (!is_numeric ( $this->form->percent )) {
				$this->messages->addError('Oprocentowanie kredytu nie jest liczbą rzeczywistą');
			}
                        
		}
		
		return ! $this->messages->isError();
	}
	
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			$this->form->years = intval($this->form->years);
			$this->form->cost = intval($this->form->cost);
			$this->form->percent = floatval($this->form->percent);
			$this->messages->addInfo('Parametry poprawne.');
				
			
                        $this->result->result = ($this->form->cost * (1 + ($this->form->percent / 100))) / ($this->form->years * 12);
                        
			$this->messages->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Kalkulator kredytu');
		$smarty->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
		$smarty->assign('page_header','Obiekty w PHP');
				
		$smarty->assign('messages',$this->messages);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/calc/credit_calc.tpl');
	}
}
