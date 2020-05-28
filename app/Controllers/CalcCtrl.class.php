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
            $this->form->val = getFromRequest('val');
            $this->form->ye = getFromRequest('ye');
            $this->form->in = getFromRequest('in');	
    }

    public function validate(){	

            if ( ! (isset($this->form->val) && isset($this->form->ye) && isset($this->form->in) ))	return false;

            if ($this->form->val == "") {
			getMessages()->addError('Value 1 not provided');
		}
		if ($this->form->ye == "") {
			getMessages()->addError('Value 2 not provided');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (!getMessages()->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->val )) {
				getMessages()->addError('Value 1 is not an integer');
			}
			
			if (! is_numeric ( $this->form->ye )) {
				getMessages()->addError('Value 2 is not an integer');
			}
		}
		
		return ! getMessages()->isError();
    }

    public function process(){
 
            $this->getParams();
		
            if ($this->validate()) {
                $ye_temp;

                $this->form->val = floatval($this->form->val);
                $this->form->ye = floatval($this->form->ye);
                getMessages()->addInfo('Correct parameters');

                $ye_temp = $this->form->ye*12;
                $this->result->result = $this->form->val/$ye_temp+$this->form->val*$this->form->in/$ye_temp;
                
                getMessages()->addInfo('Computing complete');
            }
        $this->genView();
    }
    public function genView(){
        
        getSmarty()->assign('form',$this->form);
	getSmarty()->assign('res',$this->result);
		
	getSmarty()->display('CalcView.tpl');
    }
}