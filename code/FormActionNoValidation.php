<?php

use SilverStripe\Forms\FormAction;
use SilverStripe\View\Requirements;
use SilverStripe\ORM\FieldType\DBHTMLText;

/**
 * A form action that does not triggers parsley validation
 *
 * @author Koala
 */
class FormActionNoValidation extends FormAction
{
    /**
     * @param FormAction $action
     * @param string $title
     * @param Form $form
     */
    public function __construct($action, $title = "", $form = null)
    {
        parent::__construct($action, $title, $form);
    }

    /**
     * @param array $properties
     * @return DBHTMLText
     */
    public function Field($properties = array())
    {
        Requirements::customScript(
            "jQuery('#" . $this->ID() . "').click(function() { jQuery(this).parents('form').parsley().destroy();})"
        );

        return parent::Field($properties);
    }
}
