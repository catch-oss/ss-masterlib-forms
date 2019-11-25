<?php

namespace CatchDesign\SSMasterLibForms;

use DataExtension;


/**
 * Creates a {@link FormAction} object that is compatible
 * with the Twitter SSMasterLib CSS framework.
 *
 * @author Uncle Cheese <unclecheese@leftandmain.com>
 * @package ssmasterlib_forms
 */
class SSMasterLibFormAction extends DataExtension {


	/** 
	 * Sets the style of button. Options include:
	 * 	- "success"
	 *  - "danger"
	 *  - "info"
	 *  - "primary"
	 *  - "warning"
	 *  - "inverse"
	 *
	 * @param string $style
	 * @return SSMasterLibFormAction
	 */
	public function setStyle($style) {
		$this->owner->ButtonStyle = trim(strtolower($style));
		return $this->owner;
	}



	/**
	 * Sets the size of the button. Options include:
	 * 	- "large"
	 *  - "small"
	 *  - "mini"
	 *
	 * @param string $size
	 * @return SSMasterLibFormAction
	 */
	public function setSize($size) {
		$this->owner->ButtonSize = trim(strtolower($size));
		return $this->owner;
	}


}
