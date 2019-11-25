<?php

namespace CatchDesign\SSMasterLibForms;

use Extension;
use CatchDesign\SSMasterLibForms\SSMasterLibForm;



class SSMasterLibUserForm extends Extension {

	public function updateForm($form) {
		$form->Fields()->ssmasterlibify();
		$form->Actions()->ssmasterlibify();
		$form->setTemplate(SSMasterLibForm::class);
	}

}
