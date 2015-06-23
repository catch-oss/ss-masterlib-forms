<?php

class SSMasterLibDropdownField extends DataExtension {

	protected $style;

	/**
	 * Sets the style of DropdownField. Options include:
	 * 	- "noplaceholder"
	 * @param string $style
	 * @return DropdownField
	 */
	public function setStyle($style) {
		$this->style = trim(strtolower($style));
		return $this->owner;
	}

	public function getStyle() {
		return $this->style;
	}

}
