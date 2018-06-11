<?php

class SSMasterLibSecurity extends Security {

    /**
     * Combine the given forms into a formset with a tabbed interface
     *
     * @param array $forms List of LoginForm instances
     * @return string
     */
    protected function generateLoginFormSet($forms) {

        // Include resources
        Requirements::javascript(FRAMEWORK_DIR . '/thirdparty/jquery/jquery.js');
        Requirements::javascript(FRAMEWORK_DIR . '/thirdparty/jquery-ui/jquery-ui.js');
        Requirements::javascript(FRAMEWORK_DIR . '/thirdparty/jquery-entwine/dist/jquery.entwine-dist.js');
        Requirements::css(THIRDPARTY_DIR . '/jquery-ui-themes/smoothness/jquery-ui.css');
        Requirements::css(FRAMEWORK_DIR . '/css/Security_login.css');
        Requirements::javascript(FRAMEWORK_DIR . '/javascript/TabSet.js');

        $content = '<div id="Form_EditForm">';
        $content .= '<div class="ss-tabset test">';
        $content .= '<ul>';
        $contentForms = '';

        foreach($forms as $form) {
            $content .= "<li><a href=\"#{$form->FormName()}_tab\">"
                . $form->getAuthenticator()->get_name()
                . "</a></li>\n";

            $contentForms .= '<div class="tab" id="' . $form->FormName() . '_tab">'
                . $form->forTemplate() . "</div>\n";
        }

        $content .= "</ul>\n" . $contentForms . "\n</div>\n</div>\n";
        return $content;
    }
}
