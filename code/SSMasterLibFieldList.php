<?php


class SSMasterLibFieldList extends Extension {


    protected $ignores = array ();


    public function SSMasterLibify() {
        $inline_fields = Config::inst()->get('SSMasterLibForm','inline_fields');

        foreach($this->owner as $f) {
            if (is_object($f)) {

                if($f instanceof TextField || $f instanceof EmailField  || $f instanceof PasswordField || $f instanceof TextareaField) {
                    $f->addPlaceholder($f->Title());
                }

                if(isset($this->ignores[$f->getName()])) continue;

                if ($f instanceof SelectionGroup) {
                    $f->addLabelClass('radio');
                }

                if($f instanceof CompositeField) {
                    if ($f instanceof FieldGroup) {
                        $template = "SSMasterLib{$f->class}_holder";
                        $this->setFieldHolderTemplate($template,$f);
                        $this->setTemplate($f);
                    }
                    // echo (get_class($f));
                    $f->getChildren()->SSMasterLibify();
                    continue;
                }

                if ($f instanceof DropdownField) {
                    $f->addExtraClass('catch-dropdown');
                    if (!$f->getAttribute('data-placeholder') && $f->getStyle() != 'noplaceholder')
                        $f->setAttribute('data-placeholder', 'Please select one');
                }

                if(!in_array($f->class, $inline_fields )) {
                    $f->addExtraClass('form-control');
                }

                $template = "SSMasterLib{$f->class}_holder";
                $this->setFieldHolderTemplate($template, $f);
                $this->setSmallFieldHolderTemplate($template . '_small', $f);

                // if ($f instanceof TextField)
                //     die($f->getFieldHolderTemplate());

                $this->setTemplate($f);
            }
        }

        return $this->owner;

    }


    public function setFieldHolderTemplate($template, $formField) {
        if(SSViewer::hasTemplate($template)) {
            return $formField->setFieldHolderTemplate($template);
        }
        else {
            return $formField->setFieldHolderTemplate("SSMasterLibFieldHolder");
        }
    }

    public function setSmallFieldHolderTemplate($template, $formField) {
        if(SSViewer::hasTemplate($template)) {
            return $formField->setSmallFieldHolderTemplate($template);
        }
        else {
            return $formField->setSmallFieldHolderTemplate("SSMasterLibSmallFieldHolder");
        }
    }

    public function setTemplate($formField) {
        foreach(array_reverse(ClassInfo::ancestry($formField)) as $className) {
            $SSMasterLibCandidate = "SSMasterLib{$className}";
            $nativeCandidate = $className;
            if(SSViewer::hasTemplate($SSMasterLibCandidate)) {
                return $formField->setTemplate($SSMasterLibCandidate);
                break;
            }
            elseif(SSViewer::hasTemplate($nativeCandidate)) {
                $formField->setTemplate($nativeCandidate);
                break;
            }
        }
    }



    public function SSMasterLibIgnore($field) {
        $this->ignores[$field] = true;

        return $this->owner;
    }
}
