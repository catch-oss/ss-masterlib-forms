<?php

namespace CatchDesign\SSMasterLibForms;

use CatchDesign\SSMasterLibForms\SSMasterLibForm;
use SilverStripe\Control\Controller;
use SilverStripe\Security\LoginForm;
use SilverStripe\Security\MemberAuthenticator\MemberLoginForm;

class SSMasterLibMemberLoginForm extends MemberLoginForm {


	public function __construct($controller = null, $name = null, $fields = null, $actions = null, $checkCurrentUser = true) {
		if(!$controller) $controller = Controller::curr();
		if(!$name) $name = LoginForm::class;
		parent::__construct($controller, $name, $fields, $actions, $checkCurrentUser);
		$this->Fields()->ssmasterlibify();
		$this->Actions()->ssmasterlibify();
		$this->setTemplate(SSMasterLibForm::class);

		$this->invokeWithExtensions('updateBoostrapMemberLoginForm', $this);
	}

}