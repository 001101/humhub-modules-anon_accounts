<?php

use humhub\modules\admin\widgets\AdminMenu;

return [
    'id' => 'anon_accounts',
    'class' => 'humhub\modules\anon_accounts\Module',
    'namespace' => 'humhub\modules\anon_accounts',
    'events' => [
        ['class' => AdminMenu::className(), 'event' => AdminMenu::EVENT_INIT, 'callback' => ['humhub\modules\anon_accounts\Events', 'onAdminMenuInit']],
    ],
];
?>