<?php

require_once $conf->root_path.'/libs/Smarty.class.php';
require_once $conf->root_path.'/libs/Messages.class.php';
require_once $conf->root_path.'/app/Calc/CalcForm.class.php';
require_once $conf->root_path.'/app/Calc/CalcResult.class.php';

class CalcCtrl {
    
    private $msgs;   
    private $form;   
    private $result;
    
    public function __construct(){
        $this->msgs = new Messages();
	$this->form = new CalcForm();
	$this->result = new CalcResult();
    }
    
    public function getParams(){
            $this->form->val = isset($_REQUEST['val']) ? $_REQUEST['val'] : null;
            $this->form->ye = isset($_REQUEST['ye']) ? $_REQUEST['ye'] : null;
            $this->form->in = isset($_REQUEST['in']) ? $_REQUEST['in'] : null;	
    }

    public function validate(){	

            if ( ! (isset($this->form->val) && isset($this->form->ye) && isset($this->form->in) ))	return false;

            if ($this->form->val == "") {
			$this->msgs->addError('Value 1 not provided');
		}
		if ($this->form->ye == "") {
			$this->msgs->addError('Value 2 not provided');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! $this->msgs->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->val )) {
				$this->msgs->addError('Value 1 is not an integer');
			}
			
			if (! is_numeric ( $this->form->ye )) {
				$this->msgs->addError('Value 2 is not an integer');
			}
		}
		
		return ! $this->msgs->isError();
    }

    public function process(){
 
            $this->getParams();
		
            if ($this->validate()) {
                $ye_temp;

                $this->form->val = floatval($this->form->val);
                $this->form->ye = floatval($this->form->ye);
                $this->msgs->addInfo('Parametry poprawne.');

                $ye_temp = $this->form->ye*12;
                $this->result->result = $this->form->val/$ye_temp+$this->form->val*$this->form->in/$ye_temp;
                
                $this->msgs->addInfo('Wykonano obliczenia.');
            }
        $this->genView();
    }
    public function genView(){
        global $conf;
        
        $smarty = new Smarty();
	$smarty->assign('conf',$conf);
					
	$smarty->assign('msgs',$this->msgs);
	$smarty->assign('form',$this->form);
	$smarty->assign('res',$this->result);
		
	$smarty->display($conf->root_path.'/app/Calc/CalcView.html');
    }
}