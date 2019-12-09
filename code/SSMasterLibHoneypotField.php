<?php

namespace CatchDesign\SSMasterLibForms;

use StudioBonito\SilverStripe\SpamProtection\Honeypot\FormField\HoneypotField;
use SilverStripe\Forms\FormField;

class SSMasterLibHoneypotField extends HoneypotField
{
    /**
     * The number of seconds before you can submit a valid request.
     *
     * @var int
     */
    private static $time_limit = 5;

    /**
     * Create the Captcha Field.
     *
     * @codeCoverageIgnore
     *
     * @return string
     */
    protected function createHoneypotField()
    {
        return FormField::create_tag(
            'input',
            array(
                'type'      => 'text',
                'id'        => $this->ID(),
                'name'      => $this->getName(),
                'value'     => $this->Value(),
                'style'     => 'display:none!important',
                'class'     => 'no-label'
            )
        );
    }

    /**
     * Create the Timestamp Field.
     *
     * @codeCoverageIgnore
     *
     * @return string
     */
    protected function createTimestampField()
    {
        return FormField::create_tag(
            'input',
            array(
                'type'      => 'text',
                'id'        => $this->ID() . '_Timestamp',
                'name'      => $this->getName() . '_Timestamp',
                'value'     => time(),
                'style'     => 'display:none!important',
                'class'     => 'no-label'
            )
        );
    }
}
