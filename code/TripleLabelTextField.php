<?php

namespace CatchDesign\SSMasterLibForms;

use SilverStripe\Forms\TextField;

class TripleLabelTextField extends TextField {
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

    /**
     * Adds text immediately to the left, abut the form field
     *
     * @param string $text The text to add
     * @return SSMasterLibTextField
     */
    public function prependText($text) {
        $this->owner->PrependedText = $text;
        $this->owner->addExtraClass('form-control');
        return $this->owner;
    }

    /**
     * Adds text immediately to the right, abut the form field
     *
     * @param string $text The text to add
     * @return SSMasterLibTextField
     */
    public function appendText($text) {
        $this->owner->AppendedText = $text;
        $this->owner->addExtraClass('form-control');
        return $this->owner;
    }
}
