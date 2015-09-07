<?php

/**
 * @package humhub.modules_core.admin.forms
 * @since 0.5
 */
class AnonAccountsForm extends CFormModel {

    public $anonAccountsFirstNameOptions;
    public $anonAccountsLastNameOptions;

    /**
     * Declares the validation rules.
     */
    public function rules() {
        return array(
            array('anonAccountsFirstNameOptions', 'safe'),
            array('anonAccountsLastNameOptions', 'safe'),
        );
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels() {
        return array(
            'anonAccountsFirstNameOptions' => 'First Name Options',
            'anonAccountsLastNameOptions' => 'Last Name Options',
        );
    }

}