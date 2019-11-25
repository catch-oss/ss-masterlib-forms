<?php

namespace CatchDesign\SSMasterLibForms;

use MemberLoginForm;
use Controller;
use CatchDesign\SSMasterLibForms\SSMasterLibForm;



class SSMasterLibMemberLoginForm extends MemberLoginForm {


	public function __construct($controller = null, $name = null, $fields = null, $actions = null, $checkCurrentUser = true) {
		if(!$controller) $controller = Controller::curr();
		if(!$name) $name = "LoginForm";
		parent::__construct($controller, $name, $fields, $actions, $checkCurrentUser);
		$this->Fields()->ssmasterlibify();
		$this->Actions()->ssmasterlibify();
		$this->setTemplate(SSMasterLibForm::class);

		$this->invokeWithExtensions('updateBoostrapMemberLoginForm', $this);
	}

}