<?php

Yii::app()->moduleManager->register(array(
    'id' => 'anon_accounts',
    'class' => 'application.modules.anon_accounts.AnonAccountsModule',
    'import' => array(
        'application.modules.anon_accounts.*',
        'application.modules.anon_accounts.forms.*',
    ),
    'events' => array(
    	array('class' => 'AdminMenuWidget', 'event' => 'onInit', 'callback' => array('AnonAccountsEvents', 'onAdminMenuInit')),
    ),
));
?>