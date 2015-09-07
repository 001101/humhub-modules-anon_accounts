<?php

/**
 * @package anon_accounts.forms
 */
class AnonAccountRegisterForm extends CFormModel {

    public $image;
    public $username;
    public $email;
    public $firstName; 
    public $lastName; 


    /**
     * Declares the validation rules.
     */
    public function rules() {
        return array(
            array('image, username, email, firstName, lastName', 'safe'),
            array('email', 'email'),
            // array('password', 'compare', 'compareAttribute'=>'password_repeat', 'on'=>'register'),
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