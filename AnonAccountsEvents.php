<?php

class AnonAccountsEvents {

    /**
     * Defines what to do if admin menu is initialized.
     *
     * @param type $event
     */
    public static function onAdminMenuInit($event)
    {
        $event->sender->addItem(array(
            'label' => Yii::t('AnonAccountsModule.base', 'Anon Accounts'),
            'url' => Yii::app()->createUrl('//anon_accounts/admin'),
            'group' => 'manage',
            'icon' => '<i class="fa fa-paw"></i>',
            'isActive' => (Yii::app()->controller->module && Yii::app()->controller->module->id == 'anon_accounts' && Yii::app()->controller->id == 'admin'),
            'sortOrder' => 580,
        ));
    }

}