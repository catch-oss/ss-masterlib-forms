<?php

namespace CatchDesign\SSMasterLibForms;


use CatchDesign\SSMasterLibForms\SSMasterLibForm;
use SilverStripe\Core\Extension;

class SSMasterLibUserForm extends Extension {

	public function updateForm($form) {
		$form->Fields()->ssmasterlibify();
		$form->Actions()->ssmasterlibify();
		$form->setTemplate(SSMasterLibForm::class);
	}
}
