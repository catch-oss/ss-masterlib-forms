<?php

namespace CatchDesign\SSMasterLibForms;

class SSMasterLibFileField extends SSMasterLibFormField {

	/**
	 *
	 * @param string $text The text to add
	 * @return SSMasterLibTextField
	 */
	public function prependText($text) {
		$this->owner->PrependedText = $text;
		return $this->owner;
	}

}
