<?php

class SSMasterLibUserForm extends Extension {

	public function updateForm($form) {
		$form->Fields()->ssmasterlibify();
		$form->Actions()->ssmasterlibify();
		$form->setTemplate("SSMasterLibForm");
	}

}
