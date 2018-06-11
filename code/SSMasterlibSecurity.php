<?php

class SSMasterLibSecurity extends Security {

    /**
     * Combine the given forms into a formset with a tabbed interface
     *
     * @param array $forms List of LoginForm instances
     * @return string
     */
    protected function generateLoginFormSet($forms) {

        // // Include resources
        // Requirements::javascript(FRAMEWORK_DIR . '/thirdparty/jquery/jquery.js');
        // Requirements::javascript(FRAMEWORK_DIR . '/thirdparty/jquery-ui/jquery-ui.js');
        // Requirements::javascript(FRAMEWORK_DIR . '/thirdparty/jquery-entwine/dist/jquery.entwine-dist.js');
        // Requirements::css(THIRDPARTY_DIR . '/jquery-ui-themes/smoothness/jquery-ui.css');
        // Requirements::css(FRAMEWORK_DIR . '/css/Security_login.css');
        // Requirements::javascript(FRAMEWORK_DIR . '/javascript/TabSet.js');

        $content = '';
        $contentForms = '';

        $i = 0;
        foreach($forms as $form) {
            $content .= '
                <li class="c-small-tabs__tab"
                    id="' . $form->FormName() . '-tab"
                    aria-controls="' . $form->FormName() . '-panel"
                    aria-selected="' . ($i == 0 ? 'true' : 'false') . '"
                    role="tab">
                    <span class="c-small-tabs__label">
                        ' . $form->getAuthenticator()->get_name() . '
                    </span>
                </li>
            ';

            $contentForms .= '
                <div
                    id="' . $form->FormName() . '-panel"
                    aria-labelledby="' . $form->FormName() . '-tab"
                    role="tabpanel"
                    aria-hidden="' . ($i == 0 ? 'false' : 'true') . '">
                    ' . $form->forTemplate() . '
                </div>
            ';

            $i++;
        }

        $content = '
            <div class="c-small-tabs__scroll-area js-focusable">
                <div class="c-small-tabs__inner">
                    <ul  class="c-small-tabs__list" role="tablist">
                        ' . $content . '
                    </ul>
                </div>
            </div>
        ';

        return '
            <div id="Form_EditForm" class="c-small-tabs">
                ' . $content  . '
            </div>
            ' . $contentForms
        ;
    }
}
