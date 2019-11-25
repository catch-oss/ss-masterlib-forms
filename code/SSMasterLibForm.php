<?php

namespace CatchDesign\SSMasterLibForms;

use Form;
use Config;
use Requirements;



class SSMasterLibForm extends Form {




	/**
	 * @var string The template that will render this form
	 */
	protected $template = SSMasterLibForm::class;



	/**
	 * @var string The layout of the form.
	 * @see SSMasterLibForm::setLayout()
	 */
	protected $formLayout = "vertical";




	/**
	 * Sets form to disable/enable inclusion of SSMasterLib CSS
	 *
	 * @deprecated In 3.1
	 * @param bool $bool
	 */
	public static function set_ssmasterlib_included($bool = true) {
		Config::inst()->update(SSMasterLibForm::class, "ssmasterlib_included", $bool);
	}




	/**
	 * Sets form to disable/enable inclusion of jQuery
	 *
	 * @deprecated In 3.1
	 * @param bool $bool
	 */
	public static function set_jquery_included($bool = true) {
		Config::inst()->update(SSMasterLibForm::class, "jquery_included", $bool);
	}


	/**
	 * Sets form to disable/enable inclusion of ssmasterlib forms js
	 *
	 * @deprecated In 3.1
	 * @param bool $bool
	 */
	public static function set_ssmasterlib_form_included($bool = true) {
		Config::inst()->update(SSMasterLibForm::class, "ssmasterlib_form_included", $bool);
	}


	/**
	 * Applies the SSMasterLib transformation to the fields and actiosn
	 * of the form
	 *
	 * @return SSMasterLibForm
	 */
	public function applySSMasterLib() {
		$this->Fields()->ssmasterlibify();
		$this->Actions()->ssmasterlibify();

		return $this;
	}


	/**
	 * Sets the desired layout of the form. Options include:
	 *		- "vertical" (default)
	 *		- "horizontal"
	 *		- "inline"
	 *		- "search"
	 *
	 * @todo Add template support for "inline"
	 * @param string $layout The desired layout to use
	 * @return SSMasterLibForm
	 */
	public function setLayout($layout) {
		$this->formLayout = trim(strtolower($layout));
		return $this;
	}



	/**
	 * Adds a "well," or sunken background and border, to the form
	 *
	 * @return SSMasterLibForm
	 */
	public function addWell() {
		return $this->addExtraClass("well");
	}



	/**
	 * Includes the dependency if necessary, applies the SSMasterLib templates,
	 * and renders the form HTML output
	 *
	 * @return string
	 */
	public function forTemplate() {
		if(!$this->stat('ssmasterlib_included')) {
			Requirements::css(SSMASTERLIB_FORMS_DIR.'/css/ssmasterlib.css');
		}
		if(!$this->stat('jquery_included')) {
			Requirements::javascript(THIRDPARTY_DIR."/jquery/jquery.js");
		}
		if(!$this->stat('ssmasterlib_form_included')) {
			Requirements::javascript(SSMASTERLIB_FORMS_DIR."/javascript/ssmasterlib_forms.js");
		}
		$this->addExtraClass("form-{$this->formLayout}");

		$this->applySSMasterLib();

		return parent::forTemplate();
	}




}
