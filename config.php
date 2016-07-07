<?php
return [
    'id' => 'anon_accounts',
    'class' => 'humhub\modules\anon_accounts\Module',
    'namespace' => 'humhub\modules\anon_accounts',
    'events' => [
        [
            'class' => humhub\modules\admin\widgets\AdminMenu::className(),
            'event' => humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => ['humhub\modules\anon_accounts\Events', 'onAdminMenuInit']
        ],
    ],
];