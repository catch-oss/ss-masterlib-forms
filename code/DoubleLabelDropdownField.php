<?php

namespace CatchDesign\SSMasterLibForms;

use DropdownField;


class DoubleLabelDropdownField extends DropdownField {
    protected $label1;
    protected $label2;

    public function setLabel1($label) {
        $this->label1 = $label;
    }

    public function setLabel2($label) {
        $this->label2 = $label;
    }

    public function getLabel1() {
        return $this->label1;
    }

    public function getLabel2() {
        return $this->label2;
    }
}
