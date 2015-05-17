<?php


class SSMasterLibFieldList extends Extension {


	protected $ignores = array ();


	public function SSMasterLibify() {
		$inline_fields = Config::inst()->get('SSMasterLibForm','inline_fields');

		foreach($this->owner as $f) {
			if (is_object($f)) {

				if($f instanceof TextField || $f instanceof EmailField  || $f instanceof PasswordField ) {
					$f->addPlaceholder($f->Title());
				}

				if(isset($this->ignores[$f->getName()])) continue;

				// if ($f instanceof SelectionGroup_Item) {
				// 	$f->addExtraClass('radio');
				// 	//die(print_r($f->getAttributes(),1));
				// }

				if($f instanceof CompositeField) {
					$f->getChildren()->SSMasterLibify();
					continue;
				}

				if ($f instanceof DropdownField) {
					$f->addExtraClass('catch-dropdown');
					$f->setAttribute('data-placeholder', 'Please select one');
				}

				if(!in_array($f->class, $inline_fields )) {
					$f->addExtraClass('form-control');
				}

				$template = "SSMasterLib{$f->class}_holder";
				if(SSViewer::hasTemplate($template)) {
					$f->setFieldHolderTemplate($template);
				}
				else {
					$f->setFieldHolderTemplate("SSMasterLibFieldHolder");
				}

				foreach(array_reverse(ClassInfo::ancestry($f)) as $className) {
					$SSMasterLibCandidate = "SSMasterLib{$className}";
					$nativeCandidate = $className;
					if(SSViewer::hasTemplate($SSMasterLibCandidate)) {
						$f->setTemplate($SSMasterLibCandidate);
						break;
					}
					elseif(SSViewer::hasTemplate($nativeCandidate)) {
						$f->setTemplate($nativeCandidate);
						break;
					}


				}
			}
		}

		return $this->owner;

	}



	public function SSMasterLibIgnore($field) {
		$this->ignores[$field] = true;

		return $this->owner;
	}
}
