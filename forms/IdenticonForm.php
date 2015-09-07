<?php

/**
 * @package anon_accounts.forms
 */
class IdenticonForm extends CFormModel {

    public $image;

    /**
     * Declares the validation rules.
     */
    public function rules() {
        return array(
            array('image', 'safe'),
        );
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels() {
        return array(
            'image' => 'Default Profile Image',
        );
    }

}